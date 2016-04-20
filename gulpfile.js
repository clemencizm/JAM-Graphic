var gulp = require('gulp'),
    browserSync = require('browser-sync'),
    reload      = browserSync.reload,
    sass        = require('gulp-sass');
 
// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    './style.css',
    './*.php',
    './*.{png,jpg,gif}',
    './*.js'
    ];
 
    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "http://localhost:35729/jamgraphic/",
    notify: false
    });
});
 
// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function () {
    return gulp.src('app/styles/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('styles'))
        .pipe(reload({stream:true}));
});
 
// Default task to be run with `gulp` + Watch Files For Changes
gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("app/styles/*.scss", ['sass']);
});