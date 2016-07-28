module.exports = function (grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    clean: {
      html: ['dist/**']
    },

    autoprefixer: {
      options: {
        browsers: ['> 5%', 'last 2 versions', 'ie 9']
      },
      dist: {
        src: 'dist/css/main.css'
      }
    },
    less: {
      development: {
        files: {
          "dist/css/main.css": "src/less/main.less"
        }
      }
    },
    copy: {
      main: {
        files: [
          {
            expand: true,
            cwd: 'bower_components/bootstrap/dist',
            src: ['fonts/**'],
            dest: 'dist/'
          },
          {
            expand: true,
            cwd: 'bower_components/bootstrap/dist/js',
            src: ['bootstrap.min.js'],
            dest: 'dist/js',
            filter: 'isFile'
          },
          {
            expand: true,
            cwd: 'bower_components/bootstrap/dist/css',
            src: ['bootstrap.min.css'],
            dest: 'dist/css',
            filter: 'isFile'
          },
          {
            expand: true,
            cwd: 'bower_components/jquery/dist',
            flatten: true,
            src: ['jquery.min.js'],
            dest: 'dist/js',
            filter: 'isFile'
          },
          {
            expand: true,
            cwd: 'src/css',
            src: ['*.css'],
            dest: 'dist/css',
            filter: 'isFile'
          },
        ]
      },
      js: {
        files: [
          {
            expand: true,
            flatten: true,
            src: ['src/js/*.js'],
            dest: 'dist/js',
            filter: 'isFile'
          },
        ]
      },
      templates: {
        files: [
          {
            expand: true,
            flatten: true,
            src: ['src/*'],
            dest: 'dist/',
            filter: 'isFile'
          }
        ]
      },
      images: {
        files: [
          {
            expand: true,
            cwd: 'src/',
            src: ['images/**'],
            dest: 'dist/'
          },
        ]
      }
    },

    watch: {
      css: {
        files: ['src/less/main.less'],
        tasks: ['less', 'autoprefixer']
      },
      templates: {
        files: ['src/*.html'],
        tasks: ['copy:templates']
      },
      images: {
        files: ['src/images/*'],
        tasks: ['copy:images']
      },
      js: {
        files: ['src/js/main.js','src/js/effect.js','src/js/footer.js'],
        tasks: ['copy:js']
      }
    }


  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');

  // Task(s) for development.
  grunt.registerTask('default', ['clean', 'copy', 'less', 'autoprefixer', 'watch']);

};