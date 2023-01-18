<?php

namespace TobiasNagel01\TailwindButtons;

use Illuminate\Support\ServiceProvider;

class TailwindButtonsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'button');
    }
}