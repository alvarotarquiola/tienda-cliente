
$(document).ready(function()
{
	$("#address1").blur(function(){
        var alias = jQuery("#alias");
        var address1 = jQuery("#address1").val();
        if(alias.val() == "")
            alias.attr("value", address1);
    });
});

