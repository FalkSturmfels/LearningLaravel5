var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss','resources/assets/css/app.css');

    mix.styles([
            'libs/bootstrap/css/bootstrap.min.css',
            'css/app.css',
            'libs/select2/css/select2.min.css'
        ], 'public/css/final.css', 'resources/assets/')

    mix.scripts([
        'libs/jquery/jquery-3.1.0.min.js',
        'libs/bootstrap/js/bootstrap.min.js',
        'libs/select2/js/select2.js'
    ], 'public/js/final.js', 'resources/assets');

});
