<?php

function university_files(){
    wp_enqueue_script('slider-js' , get_theme_file_uri('/src/index.js') , NULL ,'1.0' ,true);

    // wp_enqueue_script('main-website-js' , get_theme_file_uri('/build/index.js') , NULL, '1.0' , true);

    wp_enqueue_style('google_font' , '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('font-awesome' , '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('university_main_style' , get_stylesheet_uri());

}


add_action('wp_enqueue_scripts', 'university_files');

?>