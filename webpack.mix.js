const mix = require("laravel-mix");
const autoprefixer = require("autoprefixer");

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

// bundle js
mix.js("resources/js/app.js", "public/js");

// bundle sass/css
mix.sass("resources/scss/main.scss", "public/css/app.css")
    .sourceMaps(true, "source-map")
    .version();

// live sync
mix.browserSync({
    proxy: "127.0.0.1:8001",
    notify: false,
    browser: ["google chrome"],
});
