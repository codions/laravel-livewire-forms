<?php

namespace Codions\LaravelLivewireForms\Providers;

use Codions\LaravelLivewireForms\Commands\MakeFormCommand;
use Illuminate\Support\ServiceProvider;

class LaravelLivewireFormsProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeFormCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'laravel-livewire-forms');

        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/laravel-livewire-forms'),
        ]);
    }
}
