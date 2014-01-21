module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON("package.json"),

    compass: {
      build: {
        options: {
          specify: ["wp-content/themes/starkers/scss/style.scss"],
          outputStyle: "compressed",
          noLineComments: false,
          sassDir: "wp-content/themes/starkers/scss",
          cssDir: "wp-content/themes/starkers" 
        }
      }
    },

    watch: {
      sass: {
        files: ["wp-content/themes/starkers/scss/*.scss"],
        tasks: ["compass:build"],
        options: {
          livereload: true,
          host: "brianenriquez:8888"
        }
      }
    },

    rsync: {
      options: {
        args: ["--verbose"],
        recursive: true,
        exclude: [".git*", "node_modules", "Gruntfile.js", "package.json", "wp-config.php"]
      },
      production: {
        options: {
          src: "./",
          dest: "/home/seattlek/public_html/",
          host: "seattlek@seattlekrakenNHL.com"
        }
      }
    }
  });

  grunt.registerTask("default", "Build tasks for production.", function() {
    grunt.task.run("compass:build", "watch:sass");
  });

  grunt.registerTask("production", "Deploy to production environment.", function() {
    grunt.task.run("rsync:production");
  });

  grunt.loadNpmTasks('grunt-rsync');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
}