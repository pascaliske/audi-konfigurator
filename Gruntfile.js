/*global module:false*/
module.exports = function(grunt) {

	// load all tasks
	require('time-grunt')(grunt);
	require('load-grunt-tasks')(grunt);

	// project configuration
	grunt.initConfig({
		// load package file
		pkg: grunt.file.readJSON('package.json'),

		// main tasks
		// file watch
		watch: {
			css: {
				files: ['bin/sass/*.scss'],
				//tasks: ['sass', 'cssmin']
				tasks: ['sass']
			},
			js: {
				files: ['bin/js/*.js'],
				//tasks: ['jshint', 'concat', 'uglify']
				tasks: ['jshint', 'concat']
			}
		},
		notify_hooks: {
			options: {
				enabled: true,
				title: "<%= pkg.name %>@localhost",
				success: true
			}
		},

		// sass: compile, concat, minify
		sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: {
					'bin/main.css': 'bin/sass/main.scss'
				}
			}
		},
		cssmin: {
			options: {
				keepSpecialComments: '*'
			},
			target: {
				files: {
					'bin/main.min.css': ['bin/main.css']
				}
			}
		},

		// js: hint, concat, minify
		jshint: {
			all: ['bin/js/app.js']
		},
		concat: {
			options: {
				sourceMap: true,
				seperator: ';\n\n'
			},
			dist: {
				src: ['bin/js/*.js'],
				dest: 'bin/main.js'
			}
		},
		uglify: {
			options: {
				magle: false
			},
			my_target: {
				files: {
					'bin/main.min.js': ['bin/main.js']
				}
			}
		}
	});

	// default task
	grunt.registerTask('default', ['watch']);
	grunt.task.run('notify_hooks');
};