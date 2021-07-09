// webpack.mix.js

let mix = require('laravel-mix');

mix
    .js('src/js/script.js', '/dist/js')
    .sass('src/scss/app.scss', '/dist/css');