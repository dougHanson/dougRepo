var gulp = require('gulp'),
    favicons = require('../');

gulp.task('default', function () {
    gulp.src('logo.png').pipe(favicons({
        appName: "My App",
        appDescription: "This is my application",
        developer: "Hayden Bleasel",
        developerURL: "haydenbleasel.com",
        background: "#020307",
        path: "images/",
        online: false,
        version: 1.0,
        logging: true,
        html: "index.html"
    })).pipe(gulp.dest('./images/'));
});
