# sead [![GitHub release](https://img.shields.io/github/release/wp-sead/sead.svg)](https://github.com/wp-sead/sead/releases) [![license](https://img.shields.io/badge/license-GPL--2.0_or_later-orange.svg?maxAge=2592000)](https://github.com/wp-sead/sead/blob/master/LICENSE)

__WordPress starter theme including full setup for gulp, Webpack, Sass, Autoprefixer, Imagemin, Browsersync, PostCSS etc.__

## Features

- gulp
- Webpack
- Sass
- Autoprefixer
- PostCSS
- UglifyJS
- Imagemin
- Browsersync

## Usage

If you don't use gulp or Sass, you can just use this theme like others. Nothing else is necessary except WordPress environment.

### Using gulp to develop in sead

#### 1 Install Node.js

[https://nodejs.org/](https://nodejs.org/)

Instead, the easiest way is using Homebrew.

```shell
$ brew install node
```

#### 2 Clone this repo into your WordPress theme directory

```shell
$ git clone https://github.com/ixkaito/sead.git && cd sead
```

You can also download the .zip file from the following URL.

[https://github.com/wp-sead/sead/archive/master.zip](https://github.com/wp-sead/sead/archive/master.zip)

#### 3. Install Node modules

```shell
$ npm install
```

#### 4. Change the site url

Change `browsersync.siteurl` in `sead.config.js` for your environment. The default siteurl is `wocker.test` for [Wocker](http://wckr.github.io/).

#### 5. Run the package's start script

```shell
$ npm start
```

Or, if you have installed gulp globally, this is also available and is same as `npm start`.

```shell
$ gulp
```

### Configurations and Defaults

You can change the configuration by editing `sead.config.js`

#### tasks

Tasks to run when you exec `npm start` or `gulp` command.

##### browsersync

To keep browsers in sync with file changes.

default: `true`
options: boolean (`true` / `false`)

##### eslint

To lint JavaScript files.

default: `true`
options: boolean (`true` / `false`)

##### imagemin

To minify images.

default: `true`
options: boolean (`true` / `false`)

##### sass

To compile Sass.

default: `true`
options: boolean (`true` / `false`)

##### watch

To watch files and run tasks on file changes.

##### webpack

To use Webpack.

default: `true`
options: boolean (`true` / `false`)

#### assets

The directory to gather all assets.

default: `"./assets"`
options: string
example: `"./"` (directly under the theme direcotry)

#### browsersync

Browsersync settings.

##### siteurl

An EXISTING vhost.

default: `"wocker.test"`
options: string
example: `"localhost:8888"`

#### imagemin

Imagemin settings.

##### src

The directory of image source files to compress.

default: `"_images"`
options: string
example: `"src/images"`

##### dest

The destination directory of compressed image files for Imagemin.

default: `"images"`
options: string
example: `"img"`

#### js

JavaScript settings.

##### src

The directory of JavaScript source files to bundle up by Browserify.

default: `"_js"`
options: string
example: `"src/js`"

##### dest

The JavaScript destination directory for Webpack.

default: `"js"`
options: string
example: `"javascripts"`

##### entry

File name(s) of JavaScript entry file(s).

default: `["main.js"]`
options: array
example: `["pluginA.js", "pluginB.js", "main.js"]`

#### sass

Sass settings.

##### src

The directory of Sass files.

default: `"_sass"`
options: string
example: `"src/sass"`

##### dest

The CSS destination directory for Sass.

default: `"css"`
options: string
example: `"stylesheets"`

##### outputStyle

The output style of Sass.

default: `"compressed"`
options: `"expanded"`, `"nested"`, `"compact"`, `"compressed"`

#### autoprefixer

Autoprefixer settings.

##### browsers

List of browsers, which are supported in your theme.

default: `["> 1%", "last 2 versions", "Firefox ESR"]`
options: array. See [Browserslist docs](https://github.com/ai/browserslist#queries) for available queries.
example: `["> 5%", "last 2 versions", "IE 8"]`

## Notes

sead doesn't load the default theme stylesheet "style.css" by default.

## Copyright / License

&copy; 2015 the contributors of the sead project under the [GPL version 2.0](https://raw.githubusercontent.com/wp-sead/sead/master/LICENSE) or later.


`Ta Daaaaa`