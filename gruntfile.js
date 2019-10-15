module.exports = function (grunt) {

	grunt.initConfig({

		// less
		less: {
			development: {
				options: {
					compress: true,
					yuicompress: true,
					optimization: 2
				},
				files: {
					"style.css": "includes/assets/css/style.less"
				}
			}
		},

		// concat
		concat: {
			js: {
				options: {
					separator: ';'
				},
				src: ['includes/assets/js/*.min.js', 'includes/assets/js/theme.min.js'],
				dest: 'includes/assets/js/theme.min.js'
			},
		},

		// uglify
		uglify: {
			options: {
				mangle: false
			},
			js: {
				files: {
					'includes/assets/js/theme.min.js': ['includes/assets/js/theme.js'],
					'includes/assets/js/lib/jquery.countdown.min.js': ['includes/assets/js/lib/jquery.countdown.js'],
					'includes/assets/js/lib/moment.min.js': ['includes/assets/js/lib/moment.js'],
					'includes/assets/js/lib/moment-timezone.min.js': ['includes/assets/js/lib/moment-timezone.js'],
					'includes/assets/js/lib/moment-timezone-with-data.min.js': ['includes/assets/js/lib/moment-timezone-with-data.js']
				}
			}
		},

		watch: {
			styles: {
				files: ['includes/assets/css/*.less'],
				tasks: ['less'],
				options: {
					nospawn: true
				}
			},
			js: {
				files: ['includes/assets/js/**/*.js', 'includes/assets/js/theme.js'],
				tasks: ['concat:js', 'uglify:js'],
			},
		},

	});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.registerTask('default', ['watch', 'less', 'concat', 'uglify']);
};