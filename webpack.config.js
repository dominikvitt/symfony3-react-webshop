const path = require('path');

module.exports = {
	entry: './assets/js/app.js',
	mode: 'development',
	output: {
		filename: 'app.js',
		path: path.resolve(__dirname, './web/js/')
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
    resolve: {
        extensions: ['.js', '.jsx']
    }
};