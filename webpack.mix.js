const mix = require('laravel-mix');

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

mix
    .js('resources/js/schedule/components/calendar.js', 'public/js/custom.js')
    .js('resources/js/schedule/app.js', 'public/js/custom.js')
    .js('resources/js/vital/components/graph.js', 'public/js/custom.js')
    .js('resources/js/vital/components/odometer/app.js', 'public/js/custom.js')
    .js('resources/js/vital/components/odometer/ajax.js', 'public/js/ajax.js')
    .js('resources/js/vital/components/tab.js', 'public/js/custom.js')
    .js('resources/js/UI/modal.js', 'public/js/custom.js')
    .js('resources/js/UI/monthButton.js', 'public/js/custom.js')
    .js('resources/js/UI/submitButton.js', 'public/js/custom.js')
    .js('resources/js/UI/selectColor.js', 'public/js/custom.js')
    .js('resources/js/vital/app.js', 'public/js/custom.js')
    .postCss('resources/css/app.css', 'public/css/app.css', [
        require("tailwindcss"),
    ])
    .postCss('resources/css/components/UI/button.css', 'public/css/app.css', [
        require("tailwindcss"),
    ])
    .postCss('resources/css/components/UI/form.css', 'public/css/app.css', [
        require("tailwindcss"),
    ])
    .postCss('resources/css/components/UI/label.css', 'public/css/app.css', [
        require("tailwindcss"),
    ])
    .postCss('resources/css/components/layout/header.css', 'public/css/app.css', [
        require("tailwindcss"),
    ])
    .postCss('resources/css/components/UI/selector.css', 'public/css/app.css', [
        require("tailwindcss"),
    ])
    .sass('resources/scss/home/app.scss', 'public/css/custom.css')
    .sass('resources/scss/components/UI/modal.scss', 'public/css/custom.css')
    .sass('resources/scss/calendar/app.scss', 'public/css/custom.css')
    .sass('resources/scss/vital/graph.scss', 'public/css/custom.css')
    .sass('resources/scss/vital/tab.scss', 'public/css/custom.css')
    .sass('resources/scss/vital/bmi.scss', 'public/css/custom.css')
    .sass('resources/scss/vital/odometer.scss', 'public/css/custom.css')
    .sass('resources/scss/schedule/app.scss', 'public/css/custom.css')
    .sass('resources/scss/app.scss', 'public/css/custom.css');

;
