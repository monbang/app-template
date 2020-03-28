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

/*
 production
 require('laravel-mix-purgecss');

 mix.js('resources/js/app.js', 'public/static')
 mix.postCss('resources/css/app.css', 'public/static', [
     require('postcss-import'),
     require('tailwindcss'),
     require('autoprefixer'),
 ]).purgeCss({
     defaultExtractor: content => content.match(/[\w-/.:]+(?<!:)/g) || [],
 });

 */

 mix.js('resources/js/app.js', 'public/static').extract();

 mix.postCss('resources/css/app.css', 'public/static', [
     require('postcss-import'),
     require('tailwindcss'),
     require('autoprefixer'),
 ]);
