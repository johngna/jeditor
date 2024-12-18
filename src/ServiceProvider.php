<?php

namespace Johngna\JEditor;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Livewire\Livewire;
use J\Components\Editor\Editor;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Components/Editor/resources/views', 'j-components');
        
        $this->publishes([
            __DIR__.'/config/j-components.php' => config_path('j-components.php'),
        ], 'j-components-config');

        $this->publishes([
            __DIR__ . '/Components/Editor/resources/js' => public_path('vendor/j-components'),
        ], 'j-components-assets');

        Livewire::component('j-editor', Editor::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/j-components.php', 'j-components');
    }
}