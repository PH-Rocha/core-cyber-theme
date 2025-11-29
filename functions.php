<?php

function core_cyber_theme_enqueue_styles() {
  wp_enqueue_style('core-cyber-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'core_cyber_theme_enqueue_styles');

function core_cyber_theme_wp_title() {
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'core_cyber_theme_wp_title');

function core_cyber_theme_setup() {
  add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 400, 
    'flex-height' => true,
    'flex-width' => true,
  ));
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'core_cyber_theme_setup');

function core_cyber_theme_register_menus() {
  register_nav_menus(array(
    'header-menu' => __('Header Menu', 'core-cyber-theme'),
  ));
}
add_action('after_setup_theme', 'core_cyber_theme_register_menus');

function core_cyber_theme_enqueue_google_fonts() {
  wp_enqueue_style('core-cyber-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:700', [], null);
}
add_action('wp_enqueue_scripts', 'core_cyber_theme_enqueue_google_fonts');