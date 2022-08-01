const mix = require('laravel-mix');
/*
* to use tailwind and sass
* ref: https://ralphjsmit.com/tailwind-sass-laravel
* */
const tailwindcss = require('tailwindcss'); /* Add this line at the top */

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        postCss: [ 
tailwindcss('./tailwind.config.js'), 
],
    })
    .version();

/*  mix.js('resources/js/app.js', 'public/js')
.postCss('resources/sass/app.scss', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]); */