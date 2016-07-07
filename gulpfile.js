// Include gulp
var gulp = require('gulp'); 

// Include plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var favicons = require('gulp-favicons'); 
var autoprefix = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var changed = require('gulp-changed');
var imagemin = require('gulp-imagemin');
var minifyHTML = require('gulp-minify-html');
var htmlreplace = require('gulp-html-replace');

// JS lint task [jsHint]
gulp.task('lint-js', function() {
  return gulp.src('./js/**/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// Compile Sass
gulp.task('compile-sass', function() {
  return gulp.src('./css/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./css'))         // compile sass to working folder
    .pipe(gulp.dest('./dist/css'));  // compile sass to dist folder
});

// Minify CSS (concatenate, auto-prefix and minify)
gulp.task('minify-css', ['compile-sass'], function() {
  gulp.src(['./dist/css/**/*.css'])
    .pipe(concat('styles.min.css'))
    .pipe(autoprefix('last 2 versions'))
    .pipe(minifyCSS())
    .pipe(gulp.dest('./dist/css'));
});

// Minify JS (concatenate and minify)
gulp.task('minify-js', function() {
  return gulp.src('./js/**/*.js')
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./dist/js'))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'));
});

// Compress new images
gulp.task('compress-images', function() {
  gulp.src('./img/**/*')
    .pipe(changed('./dist/img'))
    .pipe(imagemin())
    .pipe(gulp.dest('./dist/img'));
});

// Generate favicons and Apple touch icons
gulp.task("favicons", function () {
  gulp.src("./img/favicon.png").pipe(favicons({
    developerName: "Doug Hanson",
    background: "#fff",
    path: "./img/favicons/",
    orientation: "portrait",
    logging: false,
    online: false,
    html: "./inc/_favicons.php"
  })).pipe(gulp.dest("./img/favicons"));
});

// Minify HTML pages
gulp.task('minify-html', ['production'], function() {
   gulp.src('./dist/**/*.php')
  .pipe(minifyHTML())
  .pipe(gulp.dest('./dist'));
});

// HTML Replace - change js and css refs to .min files 
gulp.task('html-replace', function() {
  gulp.src('./**/*.php')
    .pipe(htmlreplace({
      'css': 'css/styles.min.css',
      'js': 'js/scripts.min.js'
    }))
    .pipe(gulp.dest('./dist'));
});

// Watch Files For Changes
gulp.task('watch', function() {
  gulp.watch('js/**/*.js', ['lint-js', 'minify-js']);
  gulp.watch('css/**/*.scss', ['compile-sass']);
});




// Default Task
gulp.task('default', ['watch']);
gulp.task('favicons', ['favicons']);
gulp.task('dist', ['minify-css', 'minify-js', 'html-replace', 'compress-images']);
gulp.task('publish', ['minify-html']);

// gulp watch, then favicons (prior to dist so they are compressed), then distribution to test in staging, then minify-html for live version