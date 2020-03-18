const path = require('path');

module.exports = {
  mode: 'development',
  entry: './assets/js/custom/custom.js',
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'assets/js/custom'),
  },
  watch: true,

};
