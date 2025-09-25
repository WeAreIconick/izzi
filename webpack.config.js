const defaultConfig = require('@wordpress/scripts/config/webpack.config');

module.exports = {
	...defaultConfig,
	entry: {
		...defaultConfig.entry(),
		'search-dialog': './src/search-dialog.jsx',
		'search-dialog-editor': './src/search-dialog-editor.jsx',
	},
};
