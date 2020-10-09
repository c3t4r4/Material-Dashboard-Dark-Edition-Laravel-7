const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .sass('resources/views/MaterialDashboardDark/assets/scss/material-dashboard.scss', 'public/MaterialDashboardDark/css/material-dashboard.css')

    .styles([
        'resources/views/MaterialDashboardDark/assets/css/font-awesome.min.css'
    ], 'public/MaterialDashboardDark/css/font-awesome.min.css')

    .styles([
        'resources/views/MaterialDashboardDark/assets/demo/demo.css'
    ], 'public/MaterialDashboardDark/demo/demo.css')

    .styles([
        'resources/views/MaterialDashboardDark/assets/css/leaflet.css'
    ], 'public/MaterialDashboardDark/css/leaflet.css')

    .scripts([
        'resources/views/MaterialDashboardDark/assets/js/core/jquery.min.js',
        'resources/views/MaterialDashboardDark/assets/js/core/popper.min.js',
        'resources/views/MaterialDashboardDark/assets/js/core/bootstrap-material-design.min.js',
        'resources/views/MaterialDashboardDark/assets/js/default-passive-events.js',
        'resources/views/MaterialDashboardDark/assets/js/plugins/perfect-scrollbar.jquery.min.js',
        'resources/views/MaterialDashboardDark/assets/js/buttons.js'
    ], 'public/MaterialDashboardDark/js/material-core.js')

    .scripts([
        'resources/views/MaterialDashboardDark/assets/js/plugins/chartist.min.js'
    ], 'public/MaterialDashboardDark/js/plugins/chartist.min.js')

    .scripts([
        'resources/views/MaterialDashboardDark/assets/js/plugins/bootstrap-notify.js'
    ], 'public/MaterialDashboardDark/js/plugins/bootstrap-notify.js')

    .scripts([
        'resources/views/MaterialDashboardDark/assets/js/material-dashboard.js'
    ], 'public/MaterialDashboardDark/js/material-dashboard.js')

    .scripts([
        'resources/views/MaterialDashboardDark/assets/demo/demo.js'
    ], 'public/MaterialDashboardDark/demo/demo.js')

    .scripts([
        'resources/views/MaterialDashboardDark/assets/js/leaflet.js'
    ], 'public/MaterialDashboardDark/js/leaflet.js')

    .copyDirectory('resources/views/MaterialDashboardDark/assets/img','public/MaterialDashboardDark/img')
    .copyDirectory('resources/views/MaterialDashboardDark/assets/fonts','public/MaterialDashboardDark/fonts')

    .options({
        processCssUrls: false
    })
    .version();
