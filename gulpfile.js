var gulp         = require('gulp');
var uglify       = require('gulp-uglify');
var sass         = require ('gulp-sass');
var imagemin     = require('gulp-imagemin');
var autoprefixer = require('gulp-autoprefixer');
var rename       = require('gulp-rename');
var webpack      = require('webpack-stream');

function errorLog(error){
	console.error.bind(error);
	this.emit('end');
}

// Scripts Task
// Uglifies
gulp.task('scripts', function(){
	gulp.src('./js/index.js')
			.pipe(webpack({
				output: {filename: 'index.js'}
			}))
			.pipe(uglify())
			.on('error', errorLog)
			.pipe(gulp.dest('./'));
});

//Styles Task
gulp.task('styles', function(){
	gulp.src('styles/index.scss')
			.pipe(sass({
				outputStyle: 'compressed'
			}))
			.on('error', errorLog)
			.pipe(autoprefixer('> 5%'))
			.pipe(rename('style.css'))
			.pipe(gulp.dest('./'))
			// .pipe(livereload());
});

//Image Task
//Compress
gulp.task('image', function(){
	gulp.src('images/*')
			.pipe(imagemin())
			.pipe(gulp.dest('./images'));
});


//Watch task (built-in method)
//Watches JS
gulp.task('watch', function(){

	// var server = livereload();

	// gulp.watch('./index.js',  ['scripts']);
	gulp.watch('styles/index.scss', ['styles']);
});

gulp.task('default', ['scripts', 'styles', 'watch']);
