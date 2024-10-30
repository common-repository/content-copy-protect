jQuery(document).ready(function($) {

    tinymce.create('tinymce.plugins.ccp_plugin', {
        init : function(ed, url) {
                // Register command for when button is clicked
                ed.addCommand('ccp_insert_shortcode', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
                   
                    if( selected ){
                        //If text is selected when button is clicked
                        //Wrap shortcode around it.
						
                        content =  '[shortcode class="mybox"]'+selected+'[/shortcode]';
                    }else{
                        alert ("you have to select the image first and then click on this button to wrap code around image");
                    }

                    tinymce.execCommand('mceInsertContent', false, content);
                });

            // Register buttons - trigger above command when clicked
            ed.addButton('ccp_button', {title : 'Insert shortcode', cmd : 'ccp_insert_shortcode', image: url + '/favicons/protect.png' });
        },   
    });

    // Register our TinyMCE plugin
    // first parameter is the button ID1
    // second parameter must match the first parameter of the tinymce.create() function above
    tinymce.PluginManager.add('ccp_button', tinymce.plugins.ccp_plugin);
});