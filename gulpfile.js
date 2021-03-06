var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var run = require('gulp-run');
var notify = require('gulp-notify');

gulp.task('test', function() {
	gulp.src('spec/*.php')   // 'spec/**/*.php'
		.pipe(run('clear'))
		.pipe(phpspec('', { notify: true }))
		.on('error', notify.onError({
			title: 'Crap',
			message: 'Your tests failed!',
			icon: __dirname + '/fail.png',
			sound: 'Frog'    					// specify any of the system sounds
		}))
		.pipe(notify({
			title: 'Success',
			message: 'All tests passed!',
			icon: __dirname + '/success.png'
		}));
});

gulp.task('watch', function() {
	gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);