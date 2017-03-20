var gulp = require('gulp');
var merge = require('merge-stream');
var concat = require('gulp-concat');

gulp.task('copy-assets', function() {
    // === Angular ===
    var angular = gulp.src('./bower_components/angular/angular.min.js')
                    .pipe(gulp.dest('./media/js'));

    var angularmap = gulp.src('./bower_components/angular/angular.min.js.map')
                    .pipe(gulp.dest('./media/js'));

    // === Jquery-ui ===
    var juimages = gulp.src('./bower_components/jquery-ui/themes/base/images/**')
                    .pipe(gulp.dest('./media/css/images'));

    // === font ===
    var fafonts = gulp.src('./bower_components/font-awesome/fonts/**')
                    .pipe(gulp.dest('./media/fonts'));

    var bsfonts = gulp.src('./bower_components/bootstrap/dist/fonts/**')
                    .pipe(gulp.dest('./media/fonts'));

    var lteimg = gulp.src('./bower_components/admin-lte/dist/img/**')
                    .pipe(gulp.dest('./media/img'));

    // === bootstrap-theme ===
    var bsmap = gulp.src('./bower_components/bootstrap/dist/css/bootstrap-theme.min.css.map')
                    .pipe(gulp.dest('./media/css'));

    // === Datatables ===
    var datatablescss = gulp.src('./bower_components/datatables/media/css/dataTables.bootstrap.min.css')
                    .pipe(gulp.dest('./media/css'));

    var datatablesjs = gulp.src('./bower_components/datatables/media/js/jquery.dataTables.min.js')
                    .pipe(gulp.dest('./media/js'));

    var datatablesjs = gulp.src('./bower_components/datatables/media/js/dataTables.bootstrap.min.js')
                    .pipe(gulp.dest('./media/js'));

    // === Get from asset ===
    var cstyle = gulp.src('./asset/css/**')
                    .pipe(gulp.dest('./media/css'));

    var cimg = gulp.src('./asset/img/**')
                    .pipe(gulp.dest('./media/img'));

    var cimgtmp = gulp.src('./asset/img-template/**')
                    .pipe(gulp.dest('./media/img'));

    var cicon = gulp.src('./asset/icon/**')
                    .pipe(gulp.dest('./media/ico'));

    return merge(angular, angularmap, juimages,
                  fafonts, bsfonts, lteimg, bsmap, cstyle, cimg, cimgtmp, cicon);

});

gulp.task('concat-js', function() {
    return gulp.src([
        './bower_components/jquery/dist/jquery.min.js',
        './bower_components/jquery-ui/jquery-ui.min.js',
        './bower_components/bootstrap/dist/js/bootstrap.min.js',
        './bower_components/AdminLTE/dist/js/app.min.js',
        './asset/js/jquery.notyfy.js',
        ])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./media/js'));
});

gulp.task('concat-style', function() {
    return gulp.src([
        './bower_components/jquery-ui/themes/base/jquery-ui.min.css',
        './bower_components/font-awesome/css/font-awesome.min.css',
        './bower_components/bootstrap/dist/css/bootstrap.min.css',
        './bower_components/AdminLTE/dist/css/AdminLTE.min.css',
        './bower_components/AdminLTE/dist/css/skins/skin-green.min.css',
        './asset/css/jquery.notyfy.css',
        ])
    .pipe(concat('styles.css'))
    .pipe(gulp.dest('./media/css'));
});

gulp.task('default', ['copy-assets', 'concat-js', 'concat-style'], function() {});
