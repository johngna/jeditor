<?php

namespace Johngna\JEditor;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Livewire\Livewire;
use Johngna\JEditor\Components\Editor\Editor;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Components/Editor/resources/views', 'editor');
        
        $this->publishes([
            __DIR__.'/config/j-editor.php' => config_path('j-editor.php'),
        ], 'j-editor-config');

        $this->publishes([
            __DIR__ . '/Components/Editor/resources/js' => public_path('vendor/j-editor'),
        ], 'j-editor-assets');

        Livewire::component('j-editor', Editor::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/j-editor.php', 'j-editor');
    }
}