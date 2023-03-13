<?php

namespace App\Slides;

class Slides
{
    public function __invoke(): array
    {
        return [
            AboutMe::class,
        ];
    }
}
