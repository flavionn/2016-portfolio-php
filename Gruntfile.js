module.exports = function(grunt) {

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			dist: {
				files: {
					'dist/js/main.min.js': ['src/js/**/*.js']
				}
			}
		},

		sass: {
			dist: {
				options: {
					style: "compressed",
					noCache: true,
					sourcemap: "none"
				},
				files: {
					'dist/css/main.min.css': 'src/css/main.scss'
				}
			}
		},

		watch: {
			configFiles: {
				files: ['Gruntfile.js'],
				options: {
					reload: true
				}
			},
			css: {
				files: ['src/css/**/*.scss'],
				tasks: ['sass'],
				options: {
					livereload: true
				}
			},
			js: {
				files: ['src/js/**/*.js'],
				tasks: ['uglify'],
				options: {
					livereload: true
				}
			},
			php: {
				files: ['php/**/*.php'],
				tasks: [],
				options: {
					livereload: true
				}
			}
		}

	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

}