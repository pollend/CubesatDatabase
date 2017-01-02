var webpack = require('webpack');
var HtmlWebpackPlugin = require('html-webpack-plugin');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var helpers = require('./helpers');
var path = require('path');
var CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
    entry: {
        'polyfills': './resources/assets/polyfills.ts',
        'vendor': './resources/assets/vendor.ts',
        'app': './resources/assets/typescript/boot.ts',
        'style': './resources/assets/sass/app.scss'
    },
    resolve: {
        modules: ["node_modules","bower_components"],
        extensions: ['.ts', '.js','.scss']
    },


    module: {
        rules: [
             {
                test: /\.ts$/,
                loaders: ['awesome-typescript-loader', 'angular2-template-loader','angular2-router-loader']
             },
             {
                test: /\.html$/,
                loader: 'html-loader'
             },
             {
                test: /\.scss$/,
                loaders: ExtractTextPlugin.extract({ fallbackLoader: 'style-loader', loader: 'css-loader!resolve-url-loader!sass-loader?sourceMap=true' })
             },
             {
                 test: /\.(png|jpe?g|gif|svg|woff|woff2|ttf|eot|ico)$/,
                 loader: 'file-loader?name=assets/[name].[hash].[ext]'
             },
            {
                test: /\.css/,
                loader: ["style-loader", "css-loader"]
            }
        ]
    },


    plugins: [
        new ExtractTextPlugin('[name].[hash].css'),
        new webpack.optimize.CommonsChunkPlugin({
            name: ['app', 'vendor', 'polyfills']
        }),
        new HtmlWebpackPlugin({
            template: './resources/assets/index.html',
            filename: '../index.html'
        }),
        new CopyWebpackPlugin([
            { context: 'bower_components/jquery/',  from: '**/*', to : 'jquery'},
            { context: 'bower_components/uikit/',  from: '**/*', to : 'uikit'},
            { context: 'node_modules/marked/',  from: '**/*', to : 'marked'},
            { context: 'node_modules/codemirror/',  from: '**/*', to : 'codemirror'}
        ])
    ]
};