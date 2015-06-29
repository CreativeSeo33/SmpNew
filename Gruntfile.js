module.exports = function (grunt) {
	  
	  require('jit-grunt')(grunt);
	
 
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
        'js/js.min.js': ['js/bootstrap.min.js', 'js/jquery.fancybox.js', 'js/helpers/jquery.fancybox-thumbs.js', 'js/jquery.mousewheel-3.0.6.pack.js', 'js/jquery.maskedinput.min.js', 'js/jquery.carouFredSel-6.1.0-packed.js', 'js/jquery.bxslider.min.js', 'js/common.js']
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
      files: [{                                   
	    expand: true,
		cwd: 'dist/',
        src: ['**/*.html'],
		dest: 'dist/'     // 'destination': 'source'
       
      }]
    
    
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
            },
			dev: {
                files: [{
                    expand: true,
                    dot: true,
                   
                    src: [
                        'css/**/*',
                        'js/**/*',
						'fonts/**/*'
						
                    ],
                    dest: 'dev/'
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
            width: 1200,
            height: 700
        },
        files: [{                                   
      expand: true,
    cwd: 'dist/',
        src: ['**/*.html'],
    dest: 'dist/'     // 'destination': 'source'
       
      }]
    }
}
       
    });
 
    grunt.loadNpmTasks('grunt-include-replace');
    
	  
 
    
    grunt.registerTask('default', ['includereplace', 'processhtml', 'htmlmin', 'critical']);
	  grunt.registerTask('dev', ['includereplace:dev', 'processhtml:dev']);
};