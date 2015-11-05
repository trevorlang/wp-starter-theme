module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      dist: {
        src: './src/js/main.js',
        dest: './js/main.min.js'
      }
    },
    jshint: {
      beforeconcat: './src/js/main.js',
    },
    uglify: {
      build: {
        src: './src/js/main.js',
        dest: './js/main.min.js'
      }
    },
    sass: {
      dist: {
        options: {
          style: 'expanded'
        },
        files: {
          './style.css': 'src/scss/main.scss',
        }
      }
    },
    watch: {
      options: {
        livereload: true,
      },
      scripts: {
        files: ['./src/js/*.js'],
        tasks: ['jshint', 'concat', 'uglify'],
        options: {
            spawn: false,
        },
      },
      css: {
        files: ['./src/scss/**/*.scss'],
        tasks: ['sass', 'postcss'],
        options: {
            spawn: false,
        }
      } 
    },
    postcss: {
      options: {
        map: true,
        processors: [
          require('pixrem')(),
          require('autoprefixer')({browsers: 'last 2 versions'}),
          require('cssnano')()
        ]
      },
      dist: {
        src: './style.css'
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-postcss');

  // Default task(s).
  grunt.registerTask('default', ['jshint','concat','uglify','sass','postcss']);

};