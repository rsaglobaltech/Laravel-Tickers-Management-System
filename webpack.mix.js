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

//scripts recibe un array de archivos y retorna una ruta donde estaran estos archivos almacenados
mix
    .styles([
        'resources/vendor/fontawesome-free-5.13.0-web/css/all.css',
        'resources/css/adminlte.min.css'
    ],'public/css/app.css')
    .js('resources/js/app.js', 'public/js')
    .scripts([
        'resources/vendor/jquery/jquery.min.js',
        'resources/vendor/bootstrap/js/bootstrap.bundle.min.js',
    ],'public/js/vendor.js')
    .copy('resources/vendor/fontawesome-free-5.13.0-web/webfonts','public/webfonts')
    .copy('resources/img','public/img')
    .version()
    // .sass('resources/sass/app.scss', 'public/css');
