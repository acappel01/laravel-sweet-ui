const mix = require('laravel-mix');

mix
    .postCss('resources/css/app.css', 'build/css', [
        require('postcss-import'),
        require('postcss-nested'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);

if (mix.inProduction()) {
    mix.version();
}