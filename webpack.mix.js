const mix = require('laravel-mix');

mix.js('src/Components/Editor/resources/js/editor.js', 'dist/js')
   .setPublicPath('dist')
   .version();

// Configuração para desenvolvimento
if (!mix.inProduction()) {
    mix.sourceMaps();
}