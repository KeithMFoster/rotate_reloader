<?php
/*
Plugin Name: Rotate Reloader
Plugin URI: https://github.com/delphinian/rotate_reloader
Description: Simple Wordpress Plugin that will reload your page upon a mobile device rotation.
Version: 1.1
Author: Keith Foster
Author URI: https://www.rushdar.com
License: GPL2
Tags: rotate, reload
*/
add_action( 'wp_head', 'rotate_reloader' );
function rotate_reloader(){
  ?>
  <script>	 
    window.onorientationchange = function() { 
        var orientation = window.orientation; 
            switch(orientation) { 
                case 0:
                case 90:
                case -90: window.location.reload(); 
                break; } 
    };
  </script>
  <?php
}