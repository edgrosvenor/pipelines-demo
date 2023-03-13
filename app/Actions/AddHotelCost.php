<?php

namespace App\Actions;

use App\Models\Invitation;

class AddHotelCost
{
    public function __invoke(Invitation $invitation, \Closure $next)
    {
        $invitation->cost += $invitation->distance < 100
            ? 0
            : 150;

        return $next($invitation);
    }

}
