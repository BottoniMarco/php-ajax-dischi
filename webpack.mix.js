// webpack.mix.js

let mix = require('laravel-mix');

// mix.js('src/app.js', 'dist').setPublicPath('dist');

mix
.js('src/app.js', 'js').vue({ version: 2 })
.sass('src/app.scss', 'css');
