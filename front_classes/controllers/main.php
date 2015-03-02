<?php
namespace animated_al;

defined('ABSPATH') or die("No script hack please!");

class Controller_Main extends AnimatedAl_Controller{
private $model_main;

public function __construct($model_main)
  {
  parent::__construct();
    $this->model_main = $model_main;
  }
public function execute($proj_id)
  {
    return $this->model_main->get_main_results($proj_id);
  }
public function add_scripts_fronend()
  {
  $helper = new AnimatedAl_Helper();
  
    $helper->addStyle("animated_al_list_main", "css/animated_al_list_main.css");

    $helper->addScryptfront("animated_al_list_modernizr", "js/animated_al_list_modernizr.js");  
    $helper->addScryptfront("animated_al_list_common", "js/animated_al_list_common.js");  


  }
}