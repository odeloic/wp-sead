module.exports = {
  tasks: {
    browsersync: true,
    eslint: true,
    imagemin: true,
    sass: true,
    watch: true,
    webpack: true,
  },

  assets: './assets',

  browsersync: {
    siteurl: 'newsite.local',
  },

  eslintLoader: {
    enforce: "pre",
    test: /\.js$/,
    exclude: /node_modules/,
    loader: "eslint-loader",
  },

  imagemin: {
    src: '_images',
    dest: 'images',
    progressive: true,
    svgoPlugins: [{
      removeViewBox: false
    }],
  },

  js: {
    src: '_js',
    dest: 'js',
    entry: [
      'bundle.js',
    ],
  },

  sass: {
    src: '_sass',
    dest: 'css',
    outputStyle: 'compressed',
    autoprefixer: {
      browsers: [
        '> 1%',
        'last 2 versions',
        'Firefox ESR',
      ],
    },
  },

  webpack: {
    mode: 'production',
    module: {
      rules: [],
    },
  },
}
