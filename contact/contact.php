<?php
/*
Plugin Name: contact
Plugin URI: https://contact-plugin.com/
Description: contact-plugin for babylon
Version: 1.0.0
Author: doha feriadi
Author URI: https://contact-plugin.com/
Text Domain: contact-plugin
*/
function ok(){
  return  include __DIR__.'/forms.php';
}


add_shortcode('form' ,'ok' );
