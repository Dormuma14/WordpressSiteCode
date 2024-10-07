<?php 
    function university_files() {
       wp_enqueue_script('main-university-script', get_theme_file_uri(), NULL ,microtime('2.0'), true);
      wp_enqueue_style('fonts','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
      wp_enqueue_style('font-awesome');
      wp_enqueue_style('university-main-style', get_stylesheet_uri(), NULL, microtime());

    }
    add_action('wp_enqueue_scripts', 'university_files');
    function university_features(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'university_features');
    ?>