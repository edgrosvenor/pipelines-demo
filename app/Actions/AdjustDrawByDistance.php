<?php

namespace App\Actions;

use App\Models\Invitation;

class AdjustDrawByDistance
{
    public function __invoke(Invitation $invitation, \Closure $next)
    {
        // Bands with big draws have national name recognition, so don't adjust
        if ($invitation->band?->draw > 500) {
            return $next($invitation);
        }

        $invitation->draw = round(match(true) {
            $invitation->distance > 800 => $invitation->draw * 0.2,
            $invitation->distance > 600 => $invitation->draw * 0.4,
            $invitation->distance > 400 => $invitation->draw * 0.6,
            $invitation->distance > 200 => $invitation->draw * 0.8,
            default => $invitation->draw,
        });

        return $next($invitation);
    }
}
