<?php

// adding CSS and JS

function gmc_setup(){
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap");
    wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css");
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'gmc_setup');

// adding theme support

function gmc_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form')
  );
}

add_action('after_setup_theme', 'gmc_init');


//sidebar

function my_widgets() {
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '<?h3>'
        )
        );
}

add_action('widgets_init', 'my_widgets');

function search_filter($query) {
    if($query->is_search()){
        $query->set('post_type', array('post', 'project'));
    }
}

add_filter('pre_get_posts', 'search_filter');



