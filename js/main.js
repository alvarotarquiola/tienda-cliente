$(document).ready(function()
{
	$("#address1").blur(function(){
        var alias = jQuery("#alias");
        var address1 = jQuery("#address1").val();
        //if(alias.val() == "")
            alias.attr("value", address1);
    });
    
    jQuery("#button_add_product").click(function(){
        alert("entra producto");
    });
    jQuery("#menu_header_bottom .header-link-bottom, ").hover(function(e) {    	
    	jQuery(this).find(".menu-dropdown").css('display', 'block');
    	e.preventDefault();
    }, function(e) {
    	jQuery(this).find(".menu-dropdown").css('display', 'none');
    	e.preventDefault();
    });
});

