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

mix.copy('resources/assets/plugins/font-awesome/fonts', 'public/fonts')
    .copy('resources/pages/fonts/pages-icon', 'public/fonts/pages-icon');

mix.styles([
		'resources/assets/plugins/pace/pace-theme-flash.css',
		'resources/assets/plugins/bootstrap/css/bootstrap.min.css',
		'resources/assets/plugins/font-awesome/css/font-awesome.css',
		'resources/assets/plugins/jquery-scrollbar/jquery.scrollbar.css',
		'resources/assets/plugins/select2/css/select2.min.css',
        'resources/assets/plugins/switchery/css/switchery.min.css',
        'resources/assets/plugins/nvd3/nv.d3.min.css',
        'resources/assets/plugins/mapplic/css/mapplic.css',
        'resources/assets/plugins/rickshaw/rickshaw.min.css',
        'resources/assets/plugins/bootstrap-datepicker/css/datepicker3.css',
        'resources/pages/css/pages-icons.css',
		'resources/pages/css/pages.css',
    ], 'public/css/all.css');
/*
<link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">*/


mix.scripts([
    'resources/assets/plugins/pace/pace.min.js',
    'resources/assets/plugins/jquery/jquery-3.2.1.min.js',
    'resources/assets/plugins/modernizr.custom.js',
    'resources/assets/plugins/jquery-ui/jquery-ui.min.js',
    'resources/assets/plugins/popper/umd/popper.min.js',
    'resources/assets/plugins/bootstrap/js/bootstrap.min.js',
    'resources/assets/plugins/jquery/jquery-easy.js',
    'resources/assets/plugins/jquery-unveil/jquery.unveil.min.js',
    'resources/assets/plugins/jquery-actual/jquery.actual.min.js',
    'resources/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js',
    'resources/assets/plugins/select2/js/select2.full.min.js',
    'resources/assets/plugins/classie/classie.js',
    'resources/assets/plugins/switchery/js/switchery.min.js',
    'resources/assets/plugins/jquery-validation/js/jquery.validate.min.js',
    'resources/assets/plugins/nvd3/lib/d3.v3.js',
    'resources/assets/plugins/nvd3/nv.d3.min.js',
    'resources/assets/plugins/nvd3/src/utils.js',
    'resources/assets/plugins/nvd3/src/tooltip.js',
    'resources/assets/plugins/nvd3/src/interactiveLayer.js',
    'resources/assets/plugins/nvd3/src/models/axis.js',
    'resources/assets/plugins/nvd3/src/models/line.js',
    'resources/assets/plugins/nvd3/src/models/lineWithFocusChart.js',
    'resources/assets/plugins/mapplic/js/hammer.min.js',
    'resources/assets/plugins/mapplic/js/jquery.mousewheel.js',
    'resources/assets/plugins/mapplic/js/mapplic.js',
    'resources/assets/plugins/rickshaw/rickshaw.min.js',
    'resources/assets/plugins/jquery-metrojs/MetroJs.min.js',
    'resources/assets/plugins/jquery-sparkline/jquery.sparkline.min.js',
    'resources/assets/plugins/skycons/skycons.js',
    'resources/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
    'resources/assets/js/scripts.js',
    'resources/assets/js/dashboard.js',
    'resources/assets/js/demo.js',
    'resources/pages/js/pages.min.js'
], 'public/js/all.js');


mix.copy('resources/assets/img/*.png', 'public/assets/img')
    .copy('resources/assets/img/dashboard', 'public/assets/img/dashboard')
    .copy('resources/assets/img/demo', 'public/assets/img/demo')
    .copy('resources/assets/img/form-wizard', 'public/assets/img/form-wizard')
    .copy('resources/assets/img/gallery', 'public/assets/img/gallery')
    .copy('resources/assets/img/invoice', 'public/assets/img/invoice')
    .copy('resources/assets/img/maps', 'public/assets/img/maps')
    .copy('resources/assets/img/maps/*.png', 'public/assets/img/maps')
    .copy('resources/assets/img/notifications', 'public/assets/img/notifications')
    .copy('resources/assets/img/profiles', 'public/assets/img/profiles')
    .copy('resources/assets/img/social', 'public/assets/img/social');

mix.copy('resources/pages/img/*.png', 'public/assets/img')
    .copy('resources/pages/img/icons', 'public/img/icons')
    .copy('resources/pages/img/progress', 'public/img/progress');

mix.browserSync('127.0.0.1:8000');
