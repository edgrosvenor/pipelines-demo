<?php

namespace App\Actions;

use App\Models\Invitation;

class AddDrivingCost
{
    public function __invoke(Invitation $invitation, \Closure $next)
    {
        $invitation->cost += $invitation->distance + 0.5;

        return $next($invitation);
    }

}
