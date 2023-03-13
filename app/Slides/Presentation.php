<?php

namespace App\Slides;


use Illuminate\Support\Collection;

class Presentation
{

    public ?string $slide = null;
    public array $files = [];
    public ?string $route = null;
    public ?Collection $shown = null;

    public function __construct()
    {
        $this->slide ??= AboutMe::class;
    }

    public function setSlide(string $slide): void
    {
        $this->slide = $slide;
    }

    public function setFiles(array $files): void
    {
        $this->files = $files;
    }

    public function setRoute(string $route): void
    {
        $this->route = $route;
    }

    public function remember()
    {

    }

}
