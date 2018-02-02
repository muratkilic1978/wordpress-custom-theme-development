<?php

function university_files() {
    \# Load main stylesheet into WordPress Custom Theme
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
    \# Load font-awesome icons into WordPress Custom Theme
    wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','university_files');
?>