<?php
namespace animated_al;

defined('ABSPATH') or die("No script hack please!");

class AnimatedAl_Users extends AnimatedAl_Base{

public function animated_al_list($atts)
  {
  $front = new AnimatedAl_Users_Common();
    return $front->execute($atts['id']);
  }

}
?>