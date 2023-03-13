<?php

namespace App\Slides;

use Closure;
use Illuminate\Support\Facades\Cache;

class Slide
{

    public function handle(Presentation $presentation, Closure $next): Closure
    {
        return $next($presentation);
    }


}
