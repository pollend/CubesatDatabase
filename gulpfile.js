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
    mix.sass('app.scss');
    
    mix.copy('node_modules/angular/angular.min.js','resources/assets/js/').
    copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js','resources/assets/js/').
    copy('node_modules/jquery/dist/jquery.min.js','resources/assets/js/').
    copy('node_modules/angular-ui-bootstrap/dist/ui-bootstrap.js','resources/assets/js/').
    scripts(['jquery.min.js','angular.min.js','bootstrap.min.js','ui-bootstrap.js']);

   	mix.copy('node_modules/angular-ui-bootstrap/template','public/uib/template');

    mix.scripts(['controllers/app.js','controllers/satelliteController.js'],'public/js/satelliteController.js');
    mix.scripts(['controllers/app.js','controllers/spaceportController.js'],'public/js/spaceportController.js');

});
