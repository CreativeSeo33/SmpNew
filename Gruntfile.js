module.exports = function (grunt) {
	
	
 
    grunt.initConfig({
        config: {
      src: 'src',
      dist: 'dist'
    },
        
        
		cssmin: {
 
  target: {
    files: {
		
      'dist/css/style.min.css': ['css/bootstrap.min.css', 'css/style.css', 'css/font-awesome.min.css', 'css/jquery.fancybox.css', 'css/jquery.bxslider.css']
    }
  }
},
        uglify: {
    my_target: {
      files: {
        'release/js/js.min.js': ['js/bootstrap.min.js', 'js/jquery.fancybox.js', 'js/helpers/jquery.fancybox-thumbs.js', 'js/jquery.mousewheel-3.0.6.pack.js', 'js/jquery.maskedinput.min.js', 'js/jquery.carouFredSel-6.1.0-packed.js', 'js/jquery.bxslider.min.js']
      }
    }
  },
 includereplace: {
    dist: {
      files: [{
	  src: ['**/*.html', '!blocks/*.html', '!dev/**/*.html', '!dist/**/*.html', '!node_modules/**/*.html'],
      dest: 'dist/',
	  expand:true
	 }
     ]
    },
	dev: {
   	  files: [{
		 
	  src: ['**/*.html', '!blocks/*.html', '!dev/**/*.html', '!dist/**/*.html', '!node_modules/**/*.html'],
      dest: 'dev/',
	  expand:true
  
	 }
    ]
    }
  } ,
  htmlmin: {                                     // Task
    dist: {                                      // Target
      options: {                                 // Target options
        
        removeComments: true,
        collapseWhitespace: true
      },
      files: {                                   // Dictionary of files
        'dist/index.html': 'dist/index.html'     // 'destination': 'source'
       
      }
    
    
    }
  },
watch: {
    html: {
        files: ['*.html','*/*.html', '!dist/*.html', '!release/*.html'],
        tasks: ['includereplace', 'processhtml']
    },
	css: {
        files: ['css/*.css'],
        tasks: ['cssmin']
    }
},

    connect: {
    server: {
      options: {
		  
        port: 9001,
		keepalive: true,
        base: 'release/',
		open: {
			target: 'http://localhost:9001/',
		}
      }
    }
 
        },
		

	processhtml: {
	   dev:{
        options: {
          process: true,
        },
        files: [
          {
          expand: true,     
          cwd: 'dev/',   
          src: ['{,*/}*.html'],
          dest: 'dev/',  
          ext: '.html'
        },
        ],
	  },	
      dist:{
        options: {
          process: true,
        },
        files: [
          {
          expand: true,     
          cwd: 'dist/',   
          src: ['{,*/}*.html'],
          dest: 'dist/',  
          ext: '.html'
        },
        ],
	  }	
    },	
copy: {
            dist: {
                files: [{
                    expand: true,
                    dot: true,
                   
                    src: [
                        'css/**/*',
                        'js/**/*',
						'fonts/**/*',
						'img/**/*'
                    ],
                    dest: 'dist/'
                }]
            }
        },	

critical: {
    test: {
        options: {
            base: './',
            css: [
                'dist/css/style.min.css'
            ],
            width: 1600,
            height: 1000
        },
        src: 'dist/index.html',
        dest: 'dist/index.html',
		ignore: ['@font-face',/url\(/]
    }
}
       
    });
 
  
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-include-replace');
    grunt.loadNpmTasks('grunt-critical');
	grunt.loadNpmTasks('grunt-contrib-connect');
	grunt.loadNpmTasks('grunt-processhtml');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
 
    
    grunt.registerTask('default', ['includereplace', 'processhtml']);
};