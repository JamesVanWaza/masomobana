const path = require("path");

const HtmlWebpackPlugin = require('html-webpack-plugin');

const TerserPlugin = require("terser-webpack-plugin");

module.exports = {
	//	https://webpack.js.org/configuration/mode/
	mode: 'development',
	entry: "./src/js/index.js",
	//	entry: {
	//		about: './src/about.js',
	//		contact: './src/contact.js'
	//	},
	output: {
		//		filename: "[name].bundle.js",
		filename: "main.js",
		//		path: path.resolve(__dirname, "public") Can change directory name
		path: path.resolve(__dirname, "public")
	},
	// Can change the entry name
	// entry: "./mbuzi/mbuzide.js",
	devServer: {
		contentBase: path.join(__dirname, "public"),
		port: 9002
	},
	optimization: {
		//		splitChunks: {
		//			chunks: 'all'
		//		}
		minimizer: [new TerserPlugin()]
	},
	plugins: [new HtmlWebpackPlugin()],
	module: {
		rules: [
			{
				// Whenever a javascript file is found, babel should run and do not compile node_module files
				test: /\.js$/,
				exclude: /(node_modules)/,
				use: {
					loader: 'babel-loader',
					options: {
						// Supports all the browsers
						presets: ['@babel/preset-env']
					}
				}
			},
			{
				test: /\.s[ac]ss$/i,
				use: [
					// Creates `style` nodes from JS strings
					"style-loader",
					// Translates CSS into CommonJS
					"css-loader",
					// Compiles Sass to CSS
					"sass-loader",
				  ],
			},

			// Start here for the URL Loader
			{
				test: /\.(png|jpg)$/,
				use: [
					{ loader: 'url-loader' }
				]
			}
		]
	}
}