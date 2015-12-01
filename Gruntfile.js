module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			options: {
				sourceMap: false
			},
			dist: {
				files: {
					'css/style.css': 'sass/style.scss'
				}
			}
		}
	});
	grunt.loadNpmTasks('grunt-sass');

	// Default task(s).
	grunt.registerTask('build', ['sass']);
	grunt.registerTask('deploy', ['build']);

};
