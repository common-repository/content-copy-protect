
// Logic to display and hide copyright message

jQuery(function() {
	
    jQuery(document).on("click", ".Ok", function(e){
  	
	var a = jQuery( this ); 
	a.closest(".mybox").addClass("new");
	var image = jQuery(".new").find("img");
	jQuery(".new").find("img").fadeIn(600);
	jQuery(".new").find("p").hide();
	a.unwrap();
	a.hide();
	a.closest(".mybox").removeClass("new");
	
	}); //end of click event function

}); //end of document