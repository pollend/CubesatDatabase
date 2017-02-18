<!DOCTYPE html>
<html>
<head>
    <base href="/">
    <title>Angular With Webpack</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="lib/jquery/dist/jquery.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="lib/uikit/js/uikit.min.js"></script>
    <script type="text/javascript" src="lib/uikit/js/core/alert.min.js"></script>
    <script type="text/javascript" src="lib/uikit/js/components/grid.min.js"></script>
    <script type="text/javascript" src="lib/uikit/js/components/datepicker.min.js"></script>
    <script type="text/javascript" src="lib/uikit/js/components/notify.min.js"></script>
    <script type="text/javascript" src="lib/uikit/js/components/upload.min.js"></script>
    <script type="text/javascript" src="lib/uikit/js/components/accordion.min.js"></script>
    <script type="text/javascript" src="lib/uikit/js/components/slideshow.min.js"></script>

    <!-- Codemirror and marked dependencies -->
    <link rel="stylesheet" href="lib/codemirror/lib/codemirror.css">
    <script src="lib/codemirror/lib/codemirror.js"></script>
    <script src="lib/codemirror/mode/markdown/markdown.js"></script>
    <script src="lib/codemirror/addon/mode/overlay.js"></script>
    <script src="lib/codemirror/mode/xml/xml.js"></script>
    <script src="lib/codemirror/mode/gfm/gfm.js"></script>
    <script src="lib/marked/lib/marked.js"></script>

    <script type="text/javascript" src="lib/uikit/js/components/htmleditor.js"></script>
    <link rel="stylesheet" type="text/css" href="lib/uikit/css/components/htmleditor.css">

    <link rel="stylesheet" type="text/css" href="lib/uikit/css/uikit.almost-flat.min.css">
    <link href="{{mix("style.css")}}" rel="stylesheet"></head>
<body>
<my-app>Loading...</my-app>

<script type="text/javascript" src="{{mix("polyfills.js")}}"></script>
<script type="text/javascript" src="{{mix("vendor.js")}}"></script>
<script type="text/javascript" src="{{mix("app.js")}}"></script>
<script type="text/javascript" src="{{mix("style.js")}}"></script>

</body>


</html>