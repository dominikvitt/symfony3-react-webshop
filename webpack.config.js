const path = require('path');

module.exports = {
	entry: './assets/js/app.js',
	mode: 'development',
	output: {
		filename: '.main.js',
		path: path.resolve(__dirname, 'assets/build/')
	},
	module: {		
        rules: [{			
            test: /\.js$/,			
            exclude: /node_modules/,			
            use: {				
                loader: 'babel-loader',			
            }		
        }]	
    },
};