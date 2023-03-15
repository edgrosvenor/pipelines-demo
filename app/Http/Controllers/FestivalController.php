<?php

namespace App\Http\Controllers;

use App\Actions\AddDrivingCost;
use App\Actions\AddHotelCost;
use App\Actions\AdjustCostForMerchStandRental;
use App\Actions\AdjustDrawByDistance;
use App\Actions\AdjustForAge;
use App\Actions\AdjustForAvailability;
use App\Actions\AdjustForReliability;
use App\Actions\CalculateCost;
use App\Actions\CalculateDraw;
use App\Actions\CalculateValue;
use App\Models\Festival;
use Illuminate\Support\Facades\Pipeline;

class FestivalController
{
    public function __invoke(Festival $festival)
    {
        $festival->loadMissing(['invitations.band']);

        $invitations = $festival->invitations->each(function($invitation) {
            Pipeline::send($invitation)
                ->through([
                    CalculateDraw::class,
                    AdjustDrawByDistance::class,
                    CalculateCost::class,
                    AddDrivingCost::class,
                    AdjustCostForMerchStandRental::class,
                    AddHotelCost::class,
                    CalculateValue::class,
                ])
                ->thenReturn();
        })->sortByDesc('value');

        return view('festival', ['festival' => $festival, 'invitations' => $invitations, 'showMerch' => true]);
    }
}

/**
 *
 * CalculateDraw::class,
AdjustDrawByDistance::class,
CalculateCost::class,
AddDrivingCost::class,
AdjustForAvailability::class,
AdjustForAge::class,
AdjustCostForMerchStandRental::class,
CalculateValue::class,
AdjustForReliability::class,
 */
