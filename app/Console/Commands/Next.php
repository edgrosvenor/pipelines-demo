<?php

namespace App\Console\Commands;

use App\Slides\Presentation;
use App\Slides\Slides;
use Illuminate\Console\Command;
use Illuminate\Pipeline\Pipeline;

class Next extends Command
{
    /**
     *
     * @var string
     */
    protected $signature = 'next';

    /**
     * @var string
     */
    protected $description = 'Move to the next slide';


    public function handle(): void
    {
        $slide = app(Pipeline::class)
            ->send(new Presentation())
            ->through(app(Slides::class))
            ->thenReturn();

    }
}
