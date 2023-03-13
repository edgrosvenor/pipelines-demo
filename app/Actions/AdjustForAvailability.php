<?php

namespace App\Actions;

use App\Models\Invitation;

class AdjustForAvailability
{
    public function __invoke(Invitation $invitation, \Closure $next)
    {
        if ($invitation->status === 'unavailable') {
            $invitation->draw = -1;
        }

        return $next($invitation);
    }
}
