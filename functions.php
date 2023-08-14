<?php

function growth_hacker_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'growth_hacker_theme_support');

function growth_hacker_menus()
{
  $location = array(
    'primary' => "Primary menu",
    'footer' => "Secondary menu",
    'social' => "Social menu",
    'company' => "Company menu",
  );
  register_nav_menus($location);
}

add_action('init', 'growth_hacker_menus');

function growth_hacker_register_style()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('growth-hacker-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  wp_enqueue_style('font-awesome', "//use.fontawesome.com/releases/v5.7.0/css/all.css", array(), '1.0', 'all');
  wp_enqueue_style('sora-google-font', "https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap", array(), '1.0', 'all');
  wp_enqueue_script('tailwind-css', '//cdn.tailwindcss.com', array(), '3.0', false);
  wp_enqueue_script('tailwind-config-css', get_template_directory_uri() . '/assets/script/tailwind.config.js', array(), '1.0', false);
}

add_action('wp_enqueue_scripts', 'growth_hacker_register_style');


function growth_hacker_register_script()
{
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), '3.6', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/script/script.js', array('jquery'), '1.0', true);
  wp_enqueue_script('flowbite', '//cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js', array(), '1.8', true);
}

add_action('wp_enqueue_scripts', 'growth_hacker_register_script');
