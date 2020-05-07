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

mix.setPublicPath('dist')
   .js('resources/assets/js/app.js', 'js/')
   .extract([
     'babel-polyfill',
     'vue'
   ])
   .sass('resources/assets/sass/app.scss', 'css/')
   .options({
     processCssUrls: false,
     postCss: [ require('tailwindcss')('./tailwind.config.js') ],
   })
   .browserSync("http://localhost:8000");

if (mix.inProduction()) {
  mix.version()
}
