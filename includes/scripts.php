<?php
/****************************
* Scripts Control
****************************/

function ccp_scripts()
{
	//register script in footer and also register stylesheet
	wp_register_script('ccp_script',plugin_dir_url(__FILE__). 'js/protect_message.js',array('jquery'),'',true);
	wp_register_style('ccp_style',plugin_dir_url(__FILE__).'css/plugin_style.css');
	
	//enqueue script and stylesheet files
    wp_enqueue_script( 'ccp_script' );
    wp_enqueue_style( 'ccp_style' );

} //end of function

add_action('wp_enqueue_scripts','ccp_scripts');

?>