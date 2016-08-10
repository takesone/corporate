var path                       = require('path');
var ExtractTextPlugin          = require('extract-text-webpack-plugin');
var BrowserSyncPlugin          = require('browser-sync-webpack-plugin');
var WebpackBuildNotifierPlugin = require('webpack-build-notifier');

module.exports = {
devtool: 'source-map',
entry: {
    style: './src/sass/entry.scss'
},
output: {
    path: path.join(__dirname, 'app/css'),
    filename: '[name].css'
},
module: {
      loaders: [
          {
            test: /\.scss$/, loader: ExtractTextPlugin.extract('style-loader',\
            'css-loader?sourceMap!sass-loader?outputStyle=expanded&sourceMap=true&sourceMapContents=true')
          }
      ]
  },
plugins: [
    new WebpackBuildNotifierPlugin(),
    new ExtractTextPlugin('[name].css'),
    new BrowserSyncPlugin({
        host: 'localhost',
        port: 3000,
        server: { baseDir: ['app'] },
        files: [
            'app/*.css',
            'app/*.html'
        ]
    })
]
};
