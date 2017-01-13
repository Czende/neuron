'use strict';
 
module.exports = function (grunt) {
    // load all grunt tasks
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    
    grunt.initConfig({
        watch: {
            // if any .less file changes in directory "public/css/" run the "less"-task.
            files: "assets/css/*.less",
            tasks: ["less:dev"]
        },
        // "less"-task configuration
        less: {
            dev: {
                options: {
                    paths: ["assets/css/"],
                },
                files: {
                    // compilation.css  :  source.less
                    "assets/css/style.css": "assets/css/style.less"
                }
            },
            dist: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2,
                },
                files: {
                    "assets/css/style.min.css": "assets/css/style.less"
                }
            }
        },
        // "autoprefixer"-task configuration
        autoprefixer: {
            options: {
                browsers: [
                    "Android 2.3",
                    "Android >= 4",
                    "Chrome >= 20",
                    "Firefox >= 24",
                    "Explorer >= 8",
                    "iOS >= 6",
                    "Opera >= 12",
                    "Safari >= 6"
                ]
            },
            style: {
                options: {
                    map: true
                },
                src: "assets/css/style.min.css"
            },
        },
    });

    // Load NPM tasks
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');

    // Deaful task (running "grunt" in console) is "watch"
    grunt.registerTask('default', [
        'watch'
    ]);

    // Dist task
    grunt.registerTask('dist', [
        'less:dist',
        'autoprefixer'
    ]);
};