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

mix.js('resources/js/ryz-frontend/src/index.js', 'public/js/frontend-app.js').react()
    .js('resources/js/admin-lite/src/index.js', 'public/js/admin-app.js').react();

