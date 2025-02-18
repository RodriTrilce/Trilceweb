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

// mix:Colegio
mix.js('resources/assets/js/app_colegio.js', 'public/js/app_colegio.js');
mix.sass('resources/assets/sass/main_colegio.scss','public/css');

// mix:Academia
mix.js('resources/assets/js/app_academia.js', 'public/js/app_academia.js');
mix.sass('resources/assets/sass/main_academia.scss','public/css');

// mix:Home
mix.js('resources/assets/js/app_home.js', 'public/js/app_home.js');
mix.sass('resources/assets/sass/main_home.scss','public/css');

// mix:All
mix.sass('resources/assets/sass/main.scss','public/css');

// mix:Admin
mix.sass('resources/assets/sass/admin/main_admin.scss', 'public/css/admin_main.css');
mix.js('resources/assets/js/admin/app.js', 'public/js/admin_main.js');

// mix:Dashboard
//mix.sass('resources/assets/sass/main_dashboard.scss', 'public/css/dashboard_main.css');
//mix.js('resources/assets/js/admin/app.js', 'public/js/admin_main.js');

// Assets to public
mix.copyDirectory('resources/assets/images', 'public/static/images');
mix.copyDirectory('resources/assets/fonts', 'public/static/fonts');
mix.copyDirectory('resources/assets/video', 'public/static/video');
mix.copy('resources/assets/favicon.ico', 'public/favicon.ico');
