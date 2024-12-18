<?php

namespace Johngna\JEditor;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Livewire\Livewire;
use Johngna\JEditor\Components\Editor\Editor;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {

        // Registrar como componente Livewire
        Livewire::component('j-editor', Editor::class);

        $this->loadViewsFrom(__DIR__ . '/Components/Editor/resources/views', 'j-editor');
        
        // Publicar assets automaticamente se não existirem
        if (!file_exists(public_path('vendor/j-editor'))) {
            $this->publishes([
                __DIR__ . '/Components/Editor/resources/js' => public_path('vendor/j-editor'),
            ], 'j-editor-assets');
            
            $this->publishAssets();
        }

        // Publicar configuração se não existir
        if (!file_exists(config_path('j-editor.php'))) {
            $this->publishes([
                __DIR__.'/config/j-editor.php' => config_path('j-editor.php'),
            ], 'j-editor-config');
            
            $this->publishConfig();
        }

        Livewire::component('j-editor', Editor::class);
    }

    protected function publishAssets()
    {
        $this->app->make('files')->copyDirectory(
            __DIR__ . '/Components/Editor/resources/js',
            public_path('vendor/j-editor')
        );
    }

    protected function publishConfig()
    {
        $this->app->make('files')->copy(
            __DIR__.'/config/j-editor.php',
            config_path('j-editor.php')
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/j-editor.php', 'j-editor');
    }
}
