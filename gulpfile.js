'use strict'
const gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	browserSync = require('browser-sync'),
	plumber = require('gulp-plumber')

gulp.task('sass', () =>
	gulp.src('./scss/**/*.scss')
	.pipe(plumber(function(error){
		console.log(error)
		this.emit('end')
	}))
	.pipe(sass({
		outputStyle: 'expanded'
	}))
	.pipe(autoprefixer({
		versions: ['last 2 browsers']
	}))
	.pipe(gulp.dest('./css'))
)


gulp.task('default', () =>{
	//iniciando el servidor Browser Sync
	var files = [
		'./css/theme.css',
		'./*.php',
	]

	browserSync.init(files,{
		//browserSync con php server
		proxy: "localhost/temas",
		notify: false
	})

	gulp.watch('./scss/**/*.scss',['sass'])
})