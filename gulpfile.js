var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var gulpCopy = require('gulp-copy');


gulp.task('default',['concatMain', 'concatJS', 'copyFont'], function() {
});

gulp.task('concatMain', function() {
  return gulp.src(['./sass/style.scss', './node_modules/materialize-css/sass/materialize.scss','./node_modules/font-awesome/scss/font-awesome.scss'])
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(concat('PaperTheme.css'))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write("./dist/css"))
    .pipe(gulp.dest('./dist/css'));
});

gulp.task('concatJS', function() {
  return gulp.src(['./node_modules/materialize-css/dist/js/materialize.min.js', './src/js/*.js'])
    .pipe(concat('PaperTheme.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write("./dist/js"))
    .pipe(gulp.dest('./dist/js'));
});

gulp.task('copyFont', function () {
  return gulp.src(['./node_modules/materialize-css/fonts/roboto/*'])
  .pipe(gulp.dest('./dist/fonts/roboto'))
});

gulp.task('watch', function(){
  gulp.watch('./src', ['concatMain','concatJS', 'copyFont']);
  // Other watchers
});
