// Generated on 2013-03-15 using generator-webapp 0.1.5
'use strict';

// var copyData = require('./copy_en.js').copy();
// copyData.debug = true;

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to match all subfolders:
// 'test/spec/**/*.js'

module.exports = function (grunt) {
    // load all grunt tasks
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        compass: {
            dist: {
                options: {
                    basePath: "",
                    cssDir: "assets/css",
                    sassDir: "assets/sass",
                    imagesDir: "assets/img",
                    javascriptsDir: "assets/js",
                    fontsDir: "assets/fonts",
                    relativeAssets: true
                }
            }
        },
        concat: {
            js: {
                src: [
                    'assets/js/lib/underscore-min.js',
                    'assets/js/lib/jquery-1.9.1.min.js',
                    'assets/js/lib/mobile.js',
                    'assets/js/lib/qmBrowserDetect.js',
                    'assets/js/lib/scrollManager.js',
                    'assets/js/lib/randomGenerator.js',
                    'assets/console/console_js/jquery/jquery-ui.js',
                    'assets/console/console_js/console.js',
                    'assets/js/onion.js',
                    'assets/js/script.js'
                ],
                dest: 'assets/js/app.js'
                }
        },
        watch: {
            scripts: {
                files: ['assets/sass/**/*.sass', 'assets/js/*.js'],
                tasks: ['default'],
                options: {
                    nospawn: true
                }
            }
        }
    });


    grunt.registerTask('default', ['compass', 'concat']);
};
