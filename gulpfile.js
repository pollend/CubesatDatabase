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
    scripts(['jquery.min.js','angular.min.js','bootstrap.min.js']);

    mix.copy('node_modules/bootstrap-markdown/css/bootstrap-markdown.min.css','public/css/').
    copy('node_modules/bootstrap-markdown/js/bootstrap-markdown.js','public/js/').
    copy('node_modules/markdown/lib/markdown.js','public/js/');

    mix.copy('node_modules/bootstrap-sass/assets/','public/');

    mix.scripts(['controllers/satelliteController.js'],'public/js/controllers/satelliteController.js');
    mix.scripts(['controllers/spaceportController.js'],'public/js/controllers/spaceportController.js');
 	mix.scripts(['controllers/app.js'],'public/js/controllers/app.js');

 	mix.scripts(['services/satelliteService.js'],'public/js/services/satelliteService.js');


});
