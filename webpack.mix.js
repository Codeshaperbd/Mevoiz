let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


//for admin panel assets file css/js
mix.styles([
	
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/normalize.css',
    'resources/assets/css/font-awesome.min.css',
    'resources/assets/css/icomoon.css',
    'resources/assets/css/transitions.css',
    'resources/assets/css/flags.css',
    'resources/assets/css/owl.carousel.css',
    'resources/assets/css/prettyPhoto.css',
    'resources/assets/css/jquery-ui.css',
    'resources/assets/css/scrollbar.css',
    'resources/assets/css/chartist.css',
    'resources/assets/css/main.css',
    'resources/assets/css/color.css',
    'resources/assets/css/responsive.css',

], 'public/css/libs.css');

mix.scripts([

    'resources/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js',
    'resources/assets/js/vendor/jquery-library.js',
    'resources/assets/js/vendor/bootstrap.min.js',
    'resources/assets/js/jquery.flagstrap.min.js',
    'resources/assets/js/backgroundstretch.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/jquery.vide.min.js',
    'resources/assets/js/jquery.collapse.js',
    'resources/assets/js/scrollbar.min.js',
    'resources/assets/js/prettyPhoto.js',
    'resources/assets/js/jquery-ui.js',
    'resources/assets/js/countTo.js',
    'resources/assets/js/appear.js',
    'resources/assets/js/gmap3.js',
    'resources/assets/js/main.js'

], 'public/js/libs.js');