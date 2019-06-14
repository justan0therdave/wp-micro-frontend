<?php
/**
 * Plugin Name: wp-micro-frontend
 */

  function wpmicrofe_shortcodes_init() {  
    add_shortcode('wpmicrofe', function() {
      wp_enqueue_script('reactAppRuntime', plugins_url('/js/build/static/js/runtime~main.c87cc1eb.js', __FILE__)); 
      wp_enqueue_script('reactApp', plugins_url('/js/build/static/js/2.c272f57a.chunk.js', __FILE__));
      wp_enqueue_script('reactAppMain', plugins_url('/js/build/static/js/main.0e49e05e.chunk.js', __FILE__)); 
      return sprintf("<div id=\"root\"></div>");
    });
  }

  add_action('init', 'wpmicrofe_shortcodes_init');