<?php
namespace animated_al;

defined('ABSPATH') or die("No script hack please!");

           //Add script to front end
    add_action( 'wp_enqueue_scripts', array('\animated_al\Controller_Main', 'add_scripts_fronend' ));

          //Register Widget for front end
    add_action( 'widgets_init', array('\animated_al\AnimatedAl_Users', 'register_slider_widget') );
    
?>