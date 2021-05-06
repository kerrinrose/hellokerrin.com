const ExtractTextPlugin = require('extract-text-webpack-plugin')
const path = require('path')

const cssConfig = {
    entry: './assets/styles.css',
    output: {
        path: path.resolve('./assets', 'css'),
        filename: 'main.css'
    },
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
              ]
            })
          },
          {
            test: /\.(png|woff|woff2|eot|ttf|svg|gif)$/,
            loader: 'file-loader'
          }
        ]
    },
    plugins: [
        new ExtractTextPlugin('main.css')
    ]
}



module.exports = [
  cssConfig 
]