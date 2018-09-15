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

mix.copy('resources/assets/icons/fuse-icon-font/fonts', 'public/css/fonts');

mix.sass('resources/sass/app.scss', 'public/css')
mix.styles([
		'resources/assets/icons/fuse-icon-font/style.css',
		'resources/assets/vendor/animate.css/animate.min.css',
		'resources/assets/vendor/pnotify/pnotify.custom.min.css',
		'resources/assets/vendor/nvd3/build/nv.d3.min.css',
		'resources/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css',
		'resources/assets/vendor/fuse-html/fuse-html.min.css',
    ], 'public/css/app.css');

mix.styles([
	'resources/assets/css/main.css'
], 'public/css/main.css');

mix.scripts([
    'resources/assets/vendor/mobile-detect/mobile-detect.min.js',
    'resources/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js',
    'resources/assets/vendor/d3/d3.min.js',
    'resources/assets/vendor/nvd3/build/nvd3.min.js',
    'resources/assets/vendor/datatables-net/js/jquery.dataTables.min.js',
    'resources/assets/vendor/pnotify/pnotify.custom.min.js',
    'resources/assets/vendor/fuse-html/fuse-html.min.js',
    'resources/assets/js/main.js'
], 'public/js/all.js');

mix.copy('resources/assets/images/*.png', 'public/images');
mix.copy('resources/assets/images/avatars', 'public/images/avatars');
mix.copy('resources/assets/images/backgrounds', 'public/images/backgrounds');
mix.copy('resources/assets/images/ecommerce', 'public/images/ecommerce');
mix.copy('resources/assets/images/etc', 'public/images/etc');
mix.copy('resources/assets/images/flags', 'public/images/flags');
mix.copy('resources/assets/images/logos', 'public/images/logos');
mix.copy('resources/assets/images/patterns', 'public/images/patterns');


mix.browserSync('127.0.0.1:8000');
