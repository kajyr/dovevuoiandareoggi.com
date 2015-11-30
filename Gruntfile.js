module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			release: {
				options: {
					config: 'config.rb'
				}
			}
		}
	});
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-ftp-push');

	// Default task(s).
	grunt.registerTask('build', ['compass']);
	grunt.registerTask('deploy', ['build', '']);

};
