let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

mix.js(
    'src/app.js', 
    'dist')
    .react()
    .setPublicPath('dist');


mix.postCss(
    './src/css/styles.css',
    './dist/styles.css',
	tailwindcss('./tailwind.config.js')
);
