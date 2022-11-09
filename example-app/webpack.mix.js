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
    .styles([
      'resources/css/normalize.css',
      'resources/css/master.css',
      'resources/css/header.css',
      'resources/css/main.css',
      'resources/css/footer.css'
    ], 'public/css/app.css');
