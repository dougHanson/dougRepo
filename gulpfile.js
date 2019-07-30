// Include gulp
const gulp = require('gulp');

// Include plugins
const jshint      = require('gulp-jshint');
const sass        = require('gulp-sass');
const autoprefix  = require('gulp-autoprefixer');
const minifyCSS   = require('gulp-minify-css');
const concat      = require('gulp-concat');
const uglify      = require('gulp-uglify');
const changed     = require('gulp-changed');
const imagemin    = require('gulp-imagemin');
const htmlmin     = require('gulp-htmlmin');
const htmlreplace = require('gulp-html-replace');
const clean       = require('gulp-clean');


// JS lint task [gulp-jshint]
gulp.task('lint-js', function () {
  return gulp.src(['./js/**/*.js', '!js/plugins/**/*.js']) //exclude plugins
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});


// Compile Sass [gulp-sass]
gulp.task('compile-sass', function () {
  return gulp.src('./css/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./css')) // compile sass to working folder
    .pipe(gulp.dest('./dist/css')); // compile sass to dist folder
});


// Minify CSS [gulp-minify-css]
// (concatenate, auto-prefix and minify)
gulp.task('minify-css', gulp.series('compile-sass', function () {
  return gulp.src(['./dist/css/**/*.css'])
    .pipe(concat('styles.min.css'))
    .pipe(autoprefix('last 2 versions'))
    .pipe(minifyCSS())
    .pipe(gulp.dest('./dist/css'));
}));


// Minify JS [gulp-uglify]
// concatenate and minify used js files in sequence
gulp.task('minify-js', function () {
  return gulp.src([
    './js/data.js',
    './js/plugins/lozad.min.js',
    './js/plugins/classie.js',
    './js/plugins/svganimations.js',
    './js/plugins/owl.carousel.min.js',
    './js/plugins/lightbox.js',
    './js/main.js'
  ])
    .pipe(concat('scripts.min.js'))
    .pipe(gulp.dest('./dist/js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'));
});


// HTML Replace [gulp-html-replace]
// change js and css refs to .min files 
gulp.task('html-replace', function () {
  return gulp.src('./**/*.php')
    .pipe(htmlreplace({
      'css': 'css/styles.min.css',
      'js': 'js/scripts.min.js'
    }))
    .pipe(gulp.dest('./dist'));
});


// Minify HTML [gulp-htmlmin]
gulp.task('minify-html', gulp.series('html-replace', function () {
  return gulp.src('./dist/**/*.php')
    .pipe(htmlmin({
      collapseWhitespace: true
    }))
    .pipe(gulp.dest('./dist/'));
}));


// Copy
// copy images and svgs before compressing them
gulp.task('copy', function () {
  return gulp.src(['svg/**', 'img/**'], {
      base: './'
    })
    .pipe(gulp.dest('./dist'));
});


// Compress new images [gulp-imagemin]
gulp.task('compress-images', gulp.series('copy', function () {
  return gulp.src(['./dist/svg/**/*', './dist/img/**/*'], {
      base: './'
    })
    //.pipe(changed('./img'))
    .pipe(imagemin())
    .pipe(gulp.dest('./'));
}));


// Watch Files For Changes
gulp.task('watch', gulp.series('compile-sass', function () {
  gulp.watch(['js/**/*.js', '!js/plugins/**/*.js'], gulp.series('lint-js'));
  gulp.watch('css/**/*.scss', gulp.series('compile-sass'));
}));


// Clean [gulp-clean]
// remove dist folder before publish()
gulp.task('clean', function () {
  return gulp.src('./dist', {
      read: false,
      allowEmpty: true
    })
    .pipe(clean());
});


// Default Tasks
gulp.task('default', gulp.series('watch'));
gulp.task('publish', gulp.series('clean', 'minify-css', 'minify-js', 'compress-images', 'minify-html'));