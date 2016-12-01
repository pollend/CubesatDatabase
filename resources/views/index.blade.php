<!DOCTYPE html>
<html>
    <head>
        <base href="/">
        <title>Laravel</title>
 
          <script type="text/javascript" src="jquery/jquery.min.js"></script>
          
          <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
          
          <!-- 1. Load libraries -->
          <!-- Polyfill(s) for older browsers -->
          <script src="core-js/client/shim.min.js"></script>

          <script src="zone.js/dist/zone.js"></script>
          <script src="reflect-metadata/Reflect.js"></script>
          <script src="systemjs/dist/system.src.js"></script>

          <link rel="stylesheet" type="text/css" href="/css/app.css">
         
          <!-- uikit depndencies  -->
          <script type="text/javascript" src="uikit/js/uikit.min.js"></script>
          <script type="text/javascript" src="uikit/js/core/alert.min.js"></script>
          <script type="text/javascript" src="uikit/js/components/grid.min.js"></script>



          <!-- Codemirror and marked dependencies -->
          <link rel="stylesheet" href="codemirror/lib/codemirror.css">
          <script src="codemirror/lib/codemirror.js"></script>
          <script src="codemirror/mode/markdown/markdown.js"></script>
          <script src="codemirror/addon/mode/overlay.js"></script>
          <script src="codemirror/mode/xml/xml.js"></script>
          <script src="codemirror/mode/gfm/gfm.js"></script>
          <script src="marked/marked.js"></script>

          <script type="text/javascript" src="uikit/js/components/htmleditor.js"></script>
          <link rel="stylesheet" type="text/css" href="uikit/css/components/htmleditor.min.css">
          <script src="systemjs.config.js"></script>

          <script>
                  System.import('app').catch(function(err){ console.error(err); });
          </script>
    </head>
    <body>
      <my-app>Loading...</my-app>
    </body>
</html>
 
