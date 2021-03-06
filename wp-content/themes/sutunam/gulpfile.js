/**
 * Created by Nguyen Cong Huy on 9/30/2015.
 */

// Requires the gulp and gulp-sass plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concatCss = require('gulp-concat-css'),
    sourcemap = require('gulp-sourcemaps'),
    browserSync = require('browser-sync');

// Create task for browser sync
gulp.task('browserSync', function() {
    browserSync({
        proxy: 'http://cozano.local/'
    })
});

// Create task for compile sass to css
gulp.task('sass', function() {
    return gulp.src('scss/style.scss')
        .pipe(sourcemap.init())
        .pipe(sass({sourceComments: 'map'}).on('error', sass.logError))
        .pipe(concatCss('style.css'))
        .pipe(sourcemap.write())
        .pipe(gulp.dest('css/'))
        .pipe(browserSync.stream({
            match: '**/*.css'
        }))
});

// Create task for watch changes
gulp.task('watch', ['browserSync', 'sass'], function() {
    // Watch changes of files
    gulp.watch('scss/**/*.scss', ['sass']);
    gulp.watch('js/**/*.js', browserSync.reload);
    gulp.watch('**/*.php', browserSync.reload);
});

// Default task for gulp
gulp.task('default', ['sass', 'watch']);
