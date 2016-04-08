# gulp-favicons [![Build Status](https://travis-ci.org/haydenbleasel/gulp-favicons.svg?branch=master)](https://travis-ci.org/haydenbleasel/gulp-favicons)

Favicons generator for Gulp. Simple wrapper around [favicons](https://github.com/haydenbleasel/favicons). Installed through NPM with:

```shell
npm install gulp-favicons --save-dev
```

Check out [favicons.io](http://favicons.io/) for all configuration options. Example usage:

```js
var gulp = require('gulp'),
    favicons = require('../');

gulp.task('default', function () {
    gulp.src('logo.png').pipe(favicons({
        // ...
        html: "test/index.html"         // HTML files to modify. `string` or `array`
    })).pipe(gulp.dest('./images/'));
});

```
