<?php

namespace App\Actions;

use App\Models\Invitation;

class CalculateDraw
{
    public function __invoke(Invitation $invitation, \Closure $next)
    {
        $invitation->draw = $invitation->band->draw;

        return $next($invitation);
    }
}
