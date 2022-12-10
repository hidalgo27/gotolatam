const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/plugins.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .postCss('resources/css/unreset.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ]);
// webpack.mix.js
// ...
// mix.copy('node_modules/intl-tel-input/build/js/utils.js', 'public/vendor/intl-tel-input/build/js');

mix.scripts([
    'node_modules/pikaday/pikaday.js',
    'node_modules/venobox/dist/venobox.min.js',
    // 'node_modules/intl-tel-input/build/js/intlTelInput-jquery.js',
], 'public/js/plugins.js');

if (mix.inProduction()) {
    mix.version();
}
