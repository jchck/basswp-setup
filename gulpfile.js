// Load plugins
var autoprefixer      =   require('autoprefixer');
var mqpacker          =   require('css-mqpacker');
var cssnano           =   require('cssnano');
var gulp              =   require('gulp');
var imagemin          =   require('gulp-imagemin');
var postcss           =   require('gulp-postcss');
var size              =   require('gulp-size');
var uncss             =   require('gulp-uncss');
var watch             =   require('gulp-watch');
var calc              =   require('postcss-calc');
var color             =   require('postcss-color-function');
var media             =   require('postcss-custom-media');
var properties        =   require('postcss-custom-properties');
var comments          =   require('postcss-discard-comments');
var atImport          =   require('postcss-import');

// postcss plugin registry
var postcssPlugins    =   [
    atImport,
    media,
    properties,
    calc,
    color,
    comments,
    autoprefixer,
    cssnano,
    mqpacker
];

// css processing task
gulp.task('css', function() {
  gulp.src('./src/css/setup.css')
   
   .pipe(postcss(postcssPlugins))

   .pipe(size({gzip: true, showFiles: true, title: 'Processed & gZipped!'}))

   .pipe(gulp.dest('./dest/css'))
});


// image processing task
gulp.task('pics', function(){
  gulp.src('./src/img/**.*')
    .pipe(imagemin({
        verbose: true
    }))
    .pipe(gulp.dest('./dest/img/'));
});