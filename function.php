<?php
//ativa menus
function core_cyber_registra_menus() {
  register_nav_menus([
    'menu_principal' => 'Menu Principal'
  ]);
}
add_action('init', 'core_cyber_registra_menus');


//adiciona suportes a título dinâmico e imagens destacadas
function core_cyber_suportes() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'core_cyber_suportes');