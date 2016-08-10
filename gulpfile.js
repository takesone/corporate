var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnext = require('gulp-cssnext');
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync');

var paths = {
  'scss': 'src/sass/',
  'css': 'dist/css/'
}

gulp.task('watch', function() {
  return gulp.watch(paths.scss + '**/*.scss', ['scss']);
});

gulp.task('scss', function() {
  return gulp.src(paths.scss + '**/*.scss')
    .pipe(plumber({
      errorHandler: function(err) {
        console.log(err.messageFormatted);
        this.emit('end');
      }
    }))
    .pipe(sass())
    .on('error', function(err) {
      console.log(err.message);
    })
    .pipe(cssnext())
    .pipe(gulp.dest(paths.css))
});

gulp.task('serve', function() {
  return browserSync({
    notify: false,
    logPrefix: 'IDI',
    server: './'
  });
})

gulp.task('default', ['watch', 'serve']);
