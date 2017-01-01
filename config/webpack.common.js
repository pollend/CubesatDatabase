var webpack = require('webpack');
var HtmlWebpackPlugin = require('html-webpack-plugin');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var helpers = require('./helpers');
var path = require('path');


module.exports = {
    entry: {
        'polyfills': './resources/assets/polyfills.ts',
        'vendor': './resources/assets/vendor.ts',
        'app': './resources/assets/typescript/boot.ts'
    },
    resolve: {
        extensions: ['', '.ts', '.js','.scss']
    },
    module: {
        loaders: [
            {
                test: /\.ts$/,
                loaders: ['awesome-typescript-loader', 'angular2-template-loader','angular2-router-loader']
            },
            {
                test: /\.html$/,
                loader: 'html'
            },
            {
                test: /\.scss$/,
                loaders: ["style-loader", "css-loader",'resolve-url-loader',  "sass-loader?sourceMap"]
            },
             {
                 test: /\.(png|jpe?g|gif|svg|woff|woff2|ttf|eot|ico)$/,
                 loader: 'file?name=assets/[name].[hash].[ext]'
             }
        ]
    },

    plugins: [
        new webpack.optimize.CommonsChunkPlugin({
            name: ['app', 'vendor', 'polyfills']
        }),
        new HtmlWebpackPlugin({
            template: './resources/assets/index.html'
        })
    ]
};