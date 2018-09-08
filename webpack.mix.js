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
      path.resolve(__dirname, 'node_modules/bootstrap'),
      path.resolve(__dirname, 'node_modules/jquery/dist'),
      path.resolve(__dirname, 'node_modules/vue/dist'),
      path.resolve(__dirname, 'node_modules/axios/dist'),
      path.resolve(__dirname, 'node_modules/lodash'),
      path.resolve(__dirname, 'node_modules/sweetalert2/dist')
    ]
  }
});

/*
|--------------------------------------------------------------------------
| Vendor Extraction
|--------------------------------------------------------------------------
*/
mix.extract([
  'vue',
  'jquery',
  'axios',
  'sweetalert2',
  'lodash',
  'bootstrap'
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
.js(['resources/js/app.js'], 'public/js')
.sass('resources/sass/app.scss', 'public/css');

/*
|--------------------------------------------------------------------------
| Copy Static Assets
|--------------------------------------------------------------------------
*/
// mix.copyDirectory('resources/assets/images', 'public/images');
