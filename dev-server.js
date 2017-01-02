const spawn = require('child_process').spawn;
var WebpackDevServer = require("webpack-dev-server");
var webpack = require("webpack");
var config = require("./config/webpack.prod.js");
var compiler = webpack(config);
var server = new WebpackDevServer(compiler, {
    // webpack-dev-server options

    contentBase: "./public/",
    // Can also be an array, or: contentBase: "http://localhost/",

    hot: true,
    // Enable special support for Hot Module Replacement
    // Page is no longer updated, but a "webpackHotUpdate" message is sent to the content
    // Use "webpack/hot/dev-server" as additional module in your entry point
    // Note: this does _not_ add the `HotModuleReplacementPlugin` like the CLI option does.

    historyApiFallback: true,
    // Set this as true if you want to access dev server from arbitrary url.
    // This is handy if you are using a html5 router.

    compress: true,
    // Set this if you want to enable gzip compression for assets

    setup: function(app) {
        // Here you can access the Express app object and add your own custom middleware to it.
        // For example, to define custom handlers for some paths:
        // app.get('/some/path', function(req, res) {
        //   res.json({ custom: 'response' });
        // });
    },
    proxy: {
        '/api/*' : {
            target: {
                host: "localhost",
                protocol: 'http:',
                port: 8000,
                rewrite: function (req){
                    req.url = req.url.replace(/^\/api(.+)$/,'$1');
                }
            }
        }
    },


    // pass [static options](http://expressjs.com/en/4x/api.html#express.static) to inner express server
    staticOptions: {
    },

    clientLogLevel: "info",
    // Control the console log messages shown in the browser when using inline mode. Can be `error`, `warning`, `info` or `none`.

    watchOptions: {
        aggregateTimeout: 300,
        poll: 1000
    },
    // It's a required option.
    publicPath: "./public/",
    headers: { "X-Custom-Header": "yes" },
    stats: { colors: true }
});
server.listen(8080);


const laravel = spawn('php', ['artisan', 'serve']);


laravel.stdout.on('data', (data) => {
    console.log(`stdout: ${data}`);
});

laravel.stderr.on('data', (data) => {
    console.log(`stderr: ${data}`);
});

laravel.on('close', (code) => {
    console.log(`child process exited with code ${code}`);
});