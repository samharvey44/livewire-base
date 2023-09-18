const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'build/js/app.js');

mix.sass('resources/css/app.scss', 'build/css/app.css');
mix.sass('resources/css/auth/login.scss', 'build/css/auth/login.css');

if (mix.inProduction()) {
    mix.version();
}
