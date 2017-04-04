var gulp = require('gulp'),
    compass = require('gulp-compass'),
    plumber = require('gulp-plumber'),
    notify = require('gulp-notify'),
    autoprefixer = require('gulp-autoprefixer'),
    cssMinify = require('gulp-uglifycss'),
    jsMinify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    del = require('del'),
    //sourcemaps = require('gulp-sourcemaps'),
    livereload = require('gulp-livereload');




//VARIABLE FOR DIRECTORIES
var root_folder = '.';
var sass_input = root_folder + '/assets/sass/**/*.scss';
var sass_css_output = root_folder + '/';



// NOTIFY POPUP FOR ERRORS
//the title and icon that will be used for the Grunt notifications
var notifyInfo = {
    title: 'Gulp'
};

//error notification settings for plumber
var plumberErrorHandler = {
    errorHandler: notify.onError({
        title: notifyInfo.title,
        message: "Error: <%= error.message %>"
    })
};




// SCSS PROCESS USING COMPASS PLUGIN ==========================================
gulp.task('scss', function () {
    return gulp
        .src(sass_input)

        .pipe(plumber(plumberErrorHandler))

        .pipe(compass({
            css: root_folder + '/',
            sass: root_folder + '/assets/sass',
            sourcemap: true
        }))
        .pipe(plumber.stop())

        //.pipe(autoprefixer('last 2 version', '> 1%', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 4', 'android 4'))

        .pipe(gulp.dest(sass_css_output))

})
//===============================================================================



//STYLE.CSS MINIFY ====================================================================
gulp.task('cssMinify', function () {
    return gulp
        .src(root_folder + '/style.css')
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(cssMinify())
        .pipe(gulp.dest(root_folder))

});
//================================================================================




// VENDOR CSS FILES =============================================================
gulp.task('vendorCss', function () {
    return gulp
        .src(root_folder + '/assets/css/vendor/*.css')


        //.pipe(sourcemaps.init())
        .pipe(concat('vendor.css'))
        //.pipe(sourcemaps.write())

        .pipe(gulp.dest(root_folder + '/assets/css'))

        .pipe(rename({
            basename: "vendor",
            suffix: '.min'
        }))

        .pipe(cssMinify())


        .pipe(gulp.dest(root_folder + '/assets/css/'))

        .pipe(notify({
            message: 'Vendor CSS task completed',
            onLast: true
        }));

});
//=========================================================================================


//MERGE AND MINIFY ALL THE JS IN VENDORS FOLDER ============================================
// GET VENDORS.JS FILE
gulp.task('vendorJs', function () {

    var $vendor_path = [
        'assets/js/vendor/**/*.js',
        '!assets/js/vendor/customizer.js'
    ];
    return gulp
        .src($vendor_path)

        //.pipe(sourcemaps.init())
        .pipe(concat('vendor.js'))
        //.pipe(sourcemaps.write())

        .pipe(gulp.dest(root_folder + '/assets/js'))


        .pipe(rename({
            basename: "vendor",
            suffix: '.min'
        }))
        .pipe(jsMinify())
        .pipe(gulp.dest(root_folder + '/assets/js/'))

        .pipe(notify({
            message: 'Vendor Javascript task completed',
            onLast: true
        }));

});
//================================================================================



//MINIFY  CUSTOM JS IN CUSTOM JS FOLDER===========================================
// GET CUSTOMS.JS FILE
gulp.task('customJs', function () {
    return gulp
        .src(root_folder + '/assets/js/custom/**/*.js')

        //.pipe(sourcemaps.init())
        .pipe(concat('custom.js'))
        //.pipe(sourcemaps.write())

        .pipe(gulp.dest(root_folder + '/assets/js'))

        .pipe(rename({
            basename: "custom",
            suffix: '.min'
        }))
        .pipe(jsMinify())
        .pipe(gulp.dest(root_folder + '/assets/js/'))
        .pipe(notify({
            message: 'Custom JS task completed',
            onLast: true
        }));

});
//================================================================================








// GULP WATCH
gulp.task('watch', function () {

    livereload.listen();

    //Watching SCSS file
    gulp.watch('assets/**/*.scss', ['scss']);

    //Watching style.css and all .php files
    gulp.watch([root_folder + '/*.css', root_folder + '/**/*.php'], function (files) {
        livereload.changed(files)
    });


    //Watching All vendor .CSS files and concat to vendor.css
    gulp.watch('assets/css/vendor/**/*.css', ['vendorCss'], function (files) {
        livereload.changed(files)
    });

    //Watching All vendor .JS files and concat to vendor.js
    gulp.watch('assets/js/vendor/**/*.js', ['vendorJs'], function (files) {
        livereload.changed(files)
    });

    //Watching All Custom JS files and concat to custom.js
    gulp.watch('assets/js/custom/**/*.js', ['customJs'], function (files) {
        livereload.changed(files)
    });


});