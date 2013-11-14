module.exports = function(grunt) {
    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        // jshint: {
        //     files: ['Gruntfile.js', 'scripts/**/*.js']
        // },
         compass: {
             dist: {                   // Target
              options: {              // Target options
                sassDir: 'scss',
                cssDir: 'css',
                environment: 'production'
              }
            },
            dev: {                    // Another target
              options: {
                sassDir: 'sass',
                cssDir: 'css'
              }
            }
        },
        
        concat: {
            plugins: {
                src: [
                    //'js/lib/plugin.name.js',
                    //'js/lib/plugin.name.js',
 
                ],
                dest: 'dist/js/plugins.js'
            },
            app: {
                src: [
 
                    'js/app/app.js'
                    //'js/bootstrap.js'
                ],
                dest:  'dist/js/app.js'
 
            },
            css: {
                src: ['css/*.css'],
                dest: 'dist/css/app.css'
            }
        },
        uglify: {
                options: {
                    mangle: false
                },
                plugins: {
                    src: '<%= concat.plugins.dest %>',
                    dest: 'dist/js/plugins.min.js'
                },
                 app: {
                    src: '<%= concat.app.dest %>',
                    dest: 'dist/js/app.min.js'
                }
        },
        cssmin: {
            minify: {
                src: '<%= concat.css.dest %>',
                dest: 'dist/css/app.min.css'
            }
               
        },
        smushit: {
            app: {
                src: ['img/**/*.png', 'img/**/*.jpg'],
                dest: 'dist/img'
            },
            sprite: {
                src: ['img/*.png'],
                dest: 'dist/img'
            }
        },
        watch: {
            scripts: {
                files: ['<%= concat.plugins.src %>', '<%= concat.app.src %>'],
                tasks: ['any-newer:concat:plugins', 'concat:app', 'any-newer:uglify:plugins', 'uglify:app']
            },
            css: {
                files: ['scss/*.scss', 'scss/**/*.scss'],
                tasks: ['compass:dist', 'concat:css', 'cssmin']
            },
            smushit: {
 
                files: ['img/**/*.png', 'img/**/*.jpg'],
                tasks: ['smushit']
            },
            livereload: {
 
                options: {
                    livereload: true,
                },
                files: ['dist/**/*']
            }
           
        }
    });
 
    // Load the plugins that provide the tasks we specified in package.json.
    //grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-smushit');
    grunt.loadNpmTasks('grunt-newer');
    //grunt.loadNpmTasks('grunt-contrib-requirejs');
    grunt.loadNpmTasks('grunt-contrib-watch');
 
 
    // This is the default task being executed if Grunt
    // is called without any further parameter.
    grunt.registerTask('default', ['jshint', 'concat', 'uglify', 'compass']);
    //grunt.registerTask('js', 'uglify');
};