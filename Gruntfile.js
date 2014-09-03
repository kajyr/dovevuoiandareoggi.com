module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		compass: {
			release: {
				options: {
					config: 'config.rb'
				}
			}
		},
		ftp_push: {

			prod: {
				options: {
					host: 'ftp.s85630.gridserver.com',
					authKey: 'nightdrops',
					dest: '/domains/dovevuoiandareoggi.com/html/'
				},
				files: [
					{ expand: true, src: ['html/**'] }
				]
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-ftp-push');

	// Default task(s).
	//grunt.registerTask('default', ['sitemap']);
	grunt.registerTask('deploy', ['ftp_push']);

};
