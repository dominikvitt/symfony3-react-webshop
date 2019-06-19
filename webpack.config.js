'use strict'

module.exports = {
  entry: __dirname + '/assets/js/app.js',
  output: {
    path: __dirname + '/build/js/',
    filename: 'bundle.js'
  },
  module: {
    rules: [
      {
        test: /\.js?$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        query: {
          presets: ['@babel/react']
        }
      },
      { test: /\.css$/,
        use: [
          { loader: "style-loader" },
          { loader: "css-loader" }
        ]
      }
    ]
  },
  resolve: {
    extensions: ['.js', '.jsx']
  }
};