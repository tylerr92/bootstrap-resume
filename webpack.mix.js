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
mix.setPublicPath('public');

/*
|--------------------------------------------------------------------------
| Webpack Config
|--------------------------------------------------------------------------
*/
mix.webpackConfig({
  resolve: {
    modules: [
      path.resolve(__dirname, 'node_modules/bootstrap/dist'),
      path.resolve(__dirname, 'node_modules/jquery/dist'),
      path.resolve(__dirname, 'node_modules/axios/dist'),
      path.resolve(__dirname, 'node_modules/lodash'),
      path.resolve(__dirname, 'node_modules/sweetalert2/dist'),
      path.resolve(__dirname, 'node_modules/popper.js/dist'),
      path.resolve(__dirname, 'node_modules/tempusdominus-bootstrap-4/build/js')
    ]
  }
});

/*
|--------------------------------------------------------------------------
| Vendor Extraction
|--------------------------------------------------------------------------
*/
mix.extract([
  'jquery',
  'axios',
  'sweetalert2',
  'lodash',
  'js/bootstrap',
  'popper.js',
  'tempusdominus-bootstrap-4'
]);

/*
|--------------------------------------------------------------------------
| Autoload Dependancies
|--------------------------------------------------------------------------
*/
mix.autoload({
  jquery: ['$', 'window.jQuery', 'jQuery']
});

/*
|--------------------------------------------------------------------------
| Mix App Resources
|--------------------------------------------------------------------------
| app.js | Application Javascript file
| app.scss | Applciation SCSS file
*/
mix
.js(['resources/assets/js/app.js'], 'public/js')
.sass('resources/assets/sass/app.scss', 'public/css');

/*
|--------------------------------------------------------------------------
| Copy Static Assets
|--------------------------------------------------------------------------
*/
mix.copyDirectory('resources/assets/images', 'public/images');

mix.copy('resources/assets/files/resume.pdf', 'public/files/TylerRadlickResume.pdf');

mix.copy('node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.css', 'public/css');

/*
|--------------------------------------------------------------------------
| Mix In Production
|--------------------------------------------------------------------------
*/
if (mix.inProduction() || process.env.npm_lifecycle_event !== 'hot') {
    mix.version();
}
