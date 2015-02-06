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

  function sstc_admin_page() {
    include('sstc_admin.php');
  }
  add_action('admin_menu', 'sstc_admin_page_actions');
  function sstc_admin_page_actions() {
    add_options_page('Simple Starter Columns Admin', 'Simple Starter Columns', 'manage_options', 'simple-starter-columns.php', 'sstc_admin_page');
  }

  function sstc_admin_styles($hook) {
    if ( 'sstc_admin.php' != $hook ) {
      wp_enqueue_style( 'ssta-styles', plugins_url( '/assets/css/sstc-admin.min.css', __FILE__ ) );
      return;
    }
  }
  add_action( 'admin_enqueue_scripts', 'sstc_admin_styles' );

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