const path = require('path')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const HtmlWebpackPlugin = require('html-webpack-plugin')

module.exports = {
  entry: './assets/styles.css',
  mode: process.env.NODE_ENV,
  module: {
    rules: [
      {
        test: /\.(s*)css$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
                
                'css-loader',
                'postcss-loader',
                'sass-loader'
              
          ],
        }),
      },
      {
        test: /\.(png|woff|woff2|eot|ttf|svg|gif)$/,
        loader: 'file-loader',
      },
    ],
  },
  plugins: [
    new ExtractTextPlugin('styles.css', {
      disable: process.env.NODE_ENV === 'development',
    }),
    new HtmlWebpackPlugin({
      filename: 'index.html',
      template: 'assets/index.html',
    }),
    new HtmlWebpackPlugin({
      filename: 'article-page.html',
      template: 'assets/article-page.html',
    }),
  ],
}
