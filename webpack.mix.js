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

mix
  .options({ processCssUrls: false })
  .js('resources/assets/js/app.js', 'public/js')
  .extract([
    'vue',
    'jquery',
    'select2',
    'datatables.net',
    'datatables.net-bs',
    'datatables.net-buttons',
    'datatables.net-buttons-bs',
    'toastr'
  ])
  .sass('resources/assets/sass/app.scss', 'public/css')
  .sass('resources/assets/sass/inspinia.scss', 'public/css')
  .sass('resources/assets/sass/public.scss', 'public/css')
  .copy('resources/assets/img/patterns', 'public/img/patterns')
  .copy('resources/assets/fonts', 'public/fonts')
  .copy('resources/assets/vendor/bootstrap/fonts', 'public/fonts')
  .copy('resources/assets/vendor/font-awesome/fonts', 'public/fonts')
  .copy('resources/assets/landing', 'public/landing')
  .styles([
    'resources/assets/vendor/bootstrap/css/bootstrap.css',
    'resources/assets/vendor/animate/animate.css',
    'resources/assets/vendor/font-awesome/css/font-awesome.css',
    'node_modules/datatables.net-bs/css/dataTables.bootstrap.css',
    'node_modules/datatables.net-buttons-bs/css/buttons.bootstrap.css',
    'node_modules/toastr/build/toastr.min.css',
    'node_modules/jquery-steps/demo/css/jquery.steps.css',
    'https://unpkg.com/vue-form-wizard/dist/vue-form-wizard.min.css'
  ], 'public/css/vendor.css')
  .scripts([
    // 'node_modules/jquery/dist/jquery.js',
    'node_modules/moment/moment.js',
    'resources/assets/vendor/metisMenu/jquery.metisMenu.js',
    'resources/assets/vendor/slimscroll/jquery.slimscroll.min.js',
    'resources/assets/vendor/pace/pace.min.js',
    'resources/assets/js/inspinia.js',
    'node_modules/jquery-steps/build/jquery.steps.js',
    'https://unpkg.com/vue-form-wizard/dist/vue-form-wizard.js'
  ], 'public/js/inspinia.js')
  .scripts([
    'resources/assets/vendor/chartJs/Chart.min.js',
    'resources/assets/vendor/flot/jquery.flot.js',
    'resources/assets/vendor/flot/jquery.flot.tooltip.min.js',
    'resources/assets/vendor/flot/jquery.flot.spline.js',
    'resources/assets/vendor/flot/jquery.flot.resize.js',
    'resources/assets/vendor/flot/jquery.flot.symbol.js',
    'resources/assets/vendor/flot/curvedLines.js'
  ], 'public/js/flot.js')
