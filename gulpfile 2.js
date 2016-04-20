/* File: gulpfile.js */

// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-cssbeautify');
var sass = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

// Lint Task
gulp.task('lint', function() {
    return gulp.src('scripts/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Make code beautifull. Regulate spaced and indentation, Auto prefixer, Compile Our Sass
gulp.task('css', function () {
  return gulp.src('styles/*.scss')
    .pipe(cssbeautify({indent: '  '}))
    .pipe(autoprefixer())
    .pipe(sass())
    .pipe(gulp.dest('dist/styles'));
});


// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('scripts/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('dist'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/scripts'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('scripts/*.js', ['lint', 'scripts']);
    gulp.watch('styles/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['lint', 'css', 'scripts', 'watch']);