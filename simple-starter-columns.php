<?php
/*
  Plugin Name: Simple Starter Columns
  Plugin URI: http://craigwfox.com
  Description: Just a simple columns plugin.
  Version: 1.0
  Author: Craig Fox
  Author URI: http://craigwfox.com
  License: GPL2
*/

 add_action('admin_menu', 'plugin_admin_add_page');
  function plugin_admin_add_page() {
  add_options_page('Custom Plugin Page', 'Custom Plugin Menu', 'manage_options', 'plugin', 'plugin_options_page');
  }

  /* -----------------
    Grid Shortcodes
  ----------------- */
    function sst_row_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-row '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_row', 'sst_row_shortcode');
    
    function sst_col_1_5_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-1-5 '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_1_5', 'sst_col_1_5_shortcode');

    function sst_col_2_5_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-2-5 '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_2_5', 'sst_col_2_5_shortcode');

    function sst_col_3_5_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-3-5 '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_3_5', 'sst_col_3_5_shortcode');

    function sst_col_4_5_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-4-5 '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_4_5', 'sst_col_4_5_shortcode');
    
    function sst_col_3_4_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-3-4 '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_3_4', 'sst_col_3_4_shortcode');
    
    function sst_col_2_3_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-2-3 '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_2_3', 'sst_col_2_3_shortcode');
    
    function sst_col_1_2_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-1-2 '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_1_2', 'sst_col_1_2_shortcode');
    
    function sst_col_1_3_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-1-3 '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_1_3', 'sst_col_1_3_shortcode');
    
    function sst_col_1_4_shortcode($atts, $content = null) {
      extract(shortcode_atts( array(
        'class_name' => '',
      ), $atts));
      return '<div class="sst-col-1-4 '.esc_attr($class_name).'">'.do_shortcode($content).'</div>';}
    add_shortcode('sst_col_1_4', 'sst_col_1_4_shortcode');


  /**
   * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
  */
    add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );

  /**
   * Enqueue plugin style-file
  */
    function prefix_add_my_stylesheet() {
      // Respects SSL, Style.css is relative to the current file
      wp_register_style( 'prefix-style', plugins_url('assets/sst_styles.css', __FILE__) );
      wp_enqueue_style( 'prefix-style' );
  }
?>