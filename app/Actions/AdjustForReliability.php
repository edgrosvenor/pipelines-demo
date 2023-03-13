<?php

namespace App\Actions;

use App\Models\Invitation;

class AdjustForReliability
{
    public function __invoke(Invitation $invitation, \Closure $next)
    {
        $invitation->value = round($invitation->value * $invitation->band->reliability / 100, 2);

        return $next($invitation);
    }

}
