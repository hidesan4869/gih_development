const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');

gulp.task('sass', function () {
    return gulp.src('./src/scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./src/css'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./src/scss/**/*.scss', gulp.series('sass'));
});