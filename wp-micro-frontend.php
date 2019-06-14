<?php
/**
 * Plugin Name: wp-micro-frontend
 */

  function wpmicrofe_shortcodes_init() {  
    add_shortcode('wpmicrofe', function() {
      wp_enqueue_script('reactAppRuntime', plugins_url('/js/build/static/js/runtime~main.c87cc1eb.js', __FILE__)); 
      wp_enqueue_script('reactApp', plugins_url('/js/build/static/js/2.34b4fde6.chunk.js', __FILE__));
      wp_enqueue_script('reactAppMain', plugins_url('/js/build/static/js/main.f96f5104.chunk.js', __FILE__)); 
      return sprintf("<div id=\"root\"></div>");
    });
  }

  add_action('init', 'wpmicrofe_shortcodes_init');