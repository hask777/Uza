const path = require('path');

module.exports = {
  mode: 'development',
  entry: './inc/admin/assets/js/custom/custom.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'inc/admin/assets/js/custom/'),
  },
  module: {
     rules: [
        { test: /\.txt$/, use: 'raw-loader' }
     ]
},
  watch: true,

};
