<?php


function developer_add_styles()
{
    wp_enqueue_style('my-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}

function developer_add_scripts()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js') , false, '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true);

}

add_action('wp_enqueue_scripts', 'developer_add_scripts');
add_action('wp_enqueue_scripts', 'developer_add_styles');

function developer_register_custom_menu(){
    register_nav_menu("bootstrap-menu",__('Bootstrap Menu'));
}
add_action('init', 'developer_register_custom_menu');

wp_nav_menu();