<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
 
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- 1. Load libraries -->
 
         <script src="es6-shim/es6-shim.min.js"></script>
         <script src="systemjs/dist/system-polyfills.js"></script>
         
          <script src="angular2/bundles/angular2-polyfills.js"></script>
          <script src="systemjs/dist/system.src.js"></script>
          <script src="rxjs/bundles/Rx.js"></script>
          <script src="angular2/bundles/angular2.dev.js"></script>
 
  <!-- 2. Configure SystemJS -->
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
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <my-app>Loading...</my-app>
            </div>
        </div>
    </body>
</html>
 
