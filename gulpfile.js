var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var purify = require('gulp-purifycss');
var gulpCopy = require('gulp-copy');


gulp.task('default',['concatJS', 'concatMain', 'copyFont', 'copyAwesomeFont', 'copyAwesomeStyle'], function() {
});

gulp.task('concatMain', function() {
  return gulp.src(['./node_modules/materialize-css/dist/css/materialize.min.css', './src/scss/style.scss'])
    .pipe(concat('PaperTheme.css'))
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(purify(['./*.php','./dist/js/*.js'],{whitelist : [
      'wp-caption-text','blockquote','iframe','active','ul:not(.browser-default)','html'
    ]}))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write("./dist/css"))
    .pipe(gulp.dest('./dist/css'));
});

gulp.task('concatJS', function() {
  return gulp.src(['./node_modules/jquery/dist/jquery.js','./node_modules/materialize-css/dist/js/materialize.min.js', './src/js/*.js'])
    .pipe(concat('PaperTheme.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write("./dist/js"))
    .pipe(gulp.dest('./dist/js'));
});

gulp.task('copyFont', function () {
  return gulp.src(['./node_modules/materialize-css/fonts/roboto/*'])
  .pipe(gulp.dest('./dist/fonts/roboto'))
});

gulp.task('copyAwesomeFont', function () {
  return gulp.src(['./node_modules/font-awesome/fonts/*'])
  .pipe(gulp.dest('./dist/fonts'))
});

gulp.task('copyAwesomeStyle', function () {
  return gulp.src(['./node_modules/font-awesome/css/font-awesome.min.css'])
  .pipe(gulp.dest('./dist/css'))
});

gulp.task('watch', function(){
  gulp.watch(['./src/scss/*.scss', './src/js/*.js'], ['concatJS', 'concatMain']);
  // Other watchers
});
