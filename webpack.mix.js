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

mix.styles([
    'resources/gull/css/lite-purple.min.css',
    'resources/gull/css/perfect-scrollbar.min.css',
], 'public/css/app.css')
    .scripts([
        'resources/gull/js/jquery-3.3.1.min.js',
        'resources/gull/js/bootstrap.bundle.min.js',
        'resources/gull/js/perfect-scrollbar.min.js',
        'resources/gull/js/script.min.js',
        'resources/gull/js/sidebar.large.script.min.js',
    ], 'public/js/app.js');
