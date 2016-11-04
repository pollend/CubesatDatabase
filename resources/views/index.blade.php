<!DOCTYPE html>
<html>
    <head>
        <base href="/">
        <title>Laravel</title>
 
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- 1. Load libraries -->

         <script src="es6-shim/es6-shim.min.js"></script>
         <script src="systemjs/dist/system-polyfills.js"></script>
         
          <script src="angular2/bundles/angular2-polyfills.js"></script>
          <script src="systemjs/dist/system.src.js"></script>
          <script src="rxjs/bundles/Rx.js"></script>
          <script src="angular2/bundles/angular2.dev.js"></script>
          <script src="angular2/bundles/router.dev.js"></script>
          <script src="angular2/bundles/http.dev.js"></script>

          <script src="jquery/jquery.min.js"></script>
          <script src="js/all.js"></script>

          <link rel="stylesheet" type="text/css" href="/css/app.css">
          <script src="bootstrap/javascripts/bootstrap.min.js"></script>
          
          <script>
            System.config({
              "defaultJSExtensions": true,
              packages: {
                app: {
                  format: 'register',
                  defaultExtension: 'js'
                }
              }
            });
            System.import('typescript/boot')
                  .then(null, console.error.bind(console));
          </script>
    </head>
    <body>
      <my-app>Loading...</my-app>
    </body>
</html>
 
