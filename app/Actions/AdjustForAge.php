<?php

namespace App\Actions;

use App\Models\Invitation;

class AdjustForAge
{
    public function __invoke(Invitation $invitation, \Closure $next)
    {
        $invitation->draw = round(match(true) {
            $invitation->band->age > 30 => $invitation->draw * .8,
            $invitation->band->age > 35 => $invitation->draw * .6,
            $invitation->band->age > 40 => $invitation->draw * .4,
            default => $invitation->draw,
        });

        return $next($invitation);

    }

}
