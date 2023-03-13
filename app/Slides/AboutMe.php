<?php

namespace App\Slides;

use Closure;

class AboutMe extends Slide
{
    public function handle(Presentation $presentation, Closure $next)
    {
        $this->remember();
        return $next($presentation);
    }
}
