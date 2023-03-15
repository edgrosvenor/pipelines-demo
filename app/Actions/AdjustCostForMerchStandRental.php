<?php

namespace App\Actions;

use App\Models\Invitation;
use Closure;

class AdjustCostForMerchStandRental
{
    public function __invoke(Invitation $invitation, Closure $next)
    {
        $invitation->cost -= $invitation->merch;

        return $next($invitation);
    }
}
