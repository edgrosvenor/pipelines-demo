<?php

namespace App\Actions;

use App\Models\Invitation;

class CalculateCost
{
    public function __invoke(Invitation $invitation, \Closure $next)
    {
        $invitation->cost = $invitation->band->fee;

        return $next($invitation);
    }

}
