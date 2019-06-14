<?php
/**
 * Plugin Name: wp-micro-frontend
 */

  function wpmicrofe_shortcodes_init() {
      
    add_shortcode('wpmicrofe', function() {
      wp_enqueue_script('reactApp', plugins_url('/js/app.js', __FILE__));  
      return sprintf("<div id=\"reactApp\"></div>");
    });
  }

  add_action('init', 'wpmicrofe_shortcodes_init');