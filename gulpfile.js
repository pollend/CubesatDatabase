var gulp = require("gulp");
var shell = require("gulp-shell");
var elixir = require("laravel-elixir");
var elixirTypscript = require('elixir-typescript');
var elixirhtml = require('laravel-elixir-html-minify');

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
    mix.sass('app.scss');

    mix.copy('node_modules/angular2', 'public/angular2');
    mix.copy('node_modules/rxjs', 'public/rxjs');
    mix.copy('node_modules/systemjs', 'public/systemjs');
    mix.copy('node_modules/es6-promise', 'public/es6-promise');
    mix.copy('node_modules/es6-shim', 'public/es6-shim');
    mix.copy('node_modules/zone.js', 'public/zone.js');
    mix.copy('node_modules/jquery/dist/', 'public/jquery');
    mix.copy('node_modules/bootstrap-sass/assets/*','public/bootstrap');
    mix.copy('node_modules/bootstrap-sass/assets/fonts/*','public/fonts');

    mix.copy('resources/assets/templates/', 'public/templates');

    //mix.html('templates/**/*.html', 'public/templates', 'resources/assets', {quotes: true, loose: true, empty: true});

    mix.scripts("**/*.js");


     mix.typescript('/**/*.ts','public/typescript/',{
                  "target": "ES5",
                  "module": "system",
                  "moduleResolution": "node",
                  "sourceMap": true,
                  "emitDecoratorMetadata": true,
                  "experimentalDecorators": true,
                  "removeComments": true,
                  "noImplicitAny": false,
    })
});
