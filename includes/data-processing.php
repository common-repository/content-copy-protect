<?php

/****************************
* Copy protect your code
****************************/

function shortcode($atts, $content = null) {
	ob_start();
	$output = ob_get_clean();
    extract(shortcode_atts(array("box" => 'mybox'), $atts));
    return '<div class="'.$box.'">'.$content.'<p> This image is copyright protected and can not be copied</p><input class="Ok" name="Ok" type="button" value="Ok"/></div>'.$output;
	ob_end_clean(); 

}

add_shortcode('shortcode','shortcode');

/////////////////////////////////////////////////////
// initialize register button
 add_action('init', 'ccp_shortcode_button_init');
 function ccp_shortcode_button_init() {

      //Abort early if the user will never see TinyMCE
      if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') && get_user_option('rich_editing') == 'true')
           return;

      //Add a callback to regiser our tinymce plugin   
      add_filter("mce_external_plugins", "ccp_register_tinymce_plugin"); 

      // Add a callback to add our button to the TinyMCE toolbar
      add_filter('mce_buttons', 'ccp_add_tinymce_button');
}


//This callback registers our plug-in
function ccp_register_tinymce_plugin($plugin_array) {
    $plugin_array['ccp_button'] = (plugin_dir_url( __FILE__ ).'js/shortcode.js');
    return $plugin_array;
}

//This callback adds our button to the toolbar
function ccp_add_tinymce_button($buttons) {
            //Add the button ID to the $button array
    $buttons[] = "ccp_button";
    return $buttons;
}



?>