<?php

namespace App\Http\Controllers;

class SlideController
{
    public function __invoke(int $slide = 1) {
        return view('slides.' . $slide);
    }
}
