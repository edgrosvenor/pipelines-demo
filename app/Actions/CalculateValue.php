<?php

namespace App\Actions;

use App\Models\Invitation;

class CalculateValue
{
    public function __invoke(Invitation $invitation, \Closure $next)
    {
        $invitation->value = round($invitation->draw / $invitation->cost, 2);
        return $next($invitation);
    }

}
