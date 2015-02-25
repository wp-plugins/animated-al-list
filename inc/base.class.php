<?php
namespace animated_al;

defined('ABSPATH') or die("No script hack please!");

class AnimatedAl_Base{
public $plugin_folder;
protected $trace;

public function __construct()
  {
      $this->plugin_folder = "animated_al_list";
      $this->trace = true;
  }
public function trace()
  {
    if ($this->trace)
          debug_print_backtrace();
  }
  
public function throwError($message, $code=0)
  {
    throw new Exception($message, $code);
  }
public function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
public function register_slider_widget()
  {
    register_widget( '\animated_al\AnimatedAl_Widget_List' );
  }

}
?>