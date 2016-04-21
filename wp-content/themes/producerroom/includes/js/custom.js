
/* process user description to ajax*/
jQuery('#button_user_desc').click(function(){


var user_descdata = jQuery('#form_user_desc').serialize();

  var data = {
        'action': 'user_desc',
        'data': user_descdata      // We pass php values differently!
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ajax_object.ajax_url, data, function(response) {
        //alert('Got this from the server: ' + response);
        //hide the current div and show next div
        var current_id=response;
        var new_id=parseInt(current_id,10)+1;
        
        jQuery("#popup"+current_id).hide();
        jQuery("#popup"+new_id).show();
    });
});
/*end user description*/


/* process user description to ajax*/
jQuery('#button_is_freelancer').click(function(){


var is_freelancer_data = jQuery('#form_is_freelancer').serialize();


  var data = {
        'action': 'is_freelancer',
        'data': is_freelancer_data      // We pass php values differently!
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ajax_object.ajax_url, data, function(response) {
        //hide the current div and show next div
        var current_id=response;
        var new_id=parseInt(current_id,10)+1;
        
        jQuery("#popup"+current_id).hide();
        jQuery("#popup"+new_id).show();

    });
});
/*end user description*/


/* process content creator popup questions to ajax*/
jQuery('#button_is_content_creator').click(function(){


var is_content_creatordata = jQuery('#form_is_content_creator').serialize();

    var data = {
        'action': 'is_content_creator',
        'data': is_content_creatordata      // We pass php values differently!
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ajax_object.ajax_url, data, function(response) {
        //hide the current div and show next div
        var current_id=response;
        var new_id=parseInt(current_id,10)+1;
        
        jQuery("#popup"+current_id).hide();
        jQuery("#popup"+new_id).show();

    });
});
/*end content creator*/


/* process employer popup questionss to ajax*/
jQuery('#button_is_employer').click(function(){


var is_employer_data = jQuery('#form_is_employer').serialize();

  var data = {
        'action': 'is_employer',
        'data': is_employer_data      // We pass php values differently!
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ajax_object.ajax_url, data, function(response) {
        //hide the current div and show next div
        var current_id=response;
        var new_id=parseInt(current_id,10)+1;
        
        jQuery("#popup"+current_id).hide();
        jQuery("#popup"+new_id).show();

    });
});
/*end employer*/

/*freelancer optional questions*/

/*
jQuery("input[id='radio_freelancer1']").click(function() {

   jQuery("#box_freelancer").show();


});
jQuery("input[id='radio_freelancer2']").click(function() {

   jQuery("#box_freelancer").hide();


});*/

jQuery('#button_freelancer1').click(function(){


var freelancer_meta_data1 = jQuery('#form_freelancer1').serialize();

  var data = {
        'action': 'freelancer_meta',
        'data': freelancer_meta_data1      // We pass php values differently!
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ajax_object.ajax_url, data, function(response) {
        //hide the current div and show next div
        var current_id=response;
        var new_id=parseInt(current_id,10)+1;
        
        jQuery("#popup"+current_id).hide();
        jQuery("#popup"+new_id).show();

    });
});


jQuery('#button_freelancer2').click(function(){


var freelancer_meta_data2 = jQuery('#form_freelancer2').serialize();

  var data = {
        'action': 'freelancer_meta',
        'data': freelancer_meta_data2      // We pass php values differently!
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ajax_object.ajax_url, data, function(response) {
        //hide the current div and show next div
        var current_id=response;
        var new_id=parseInt(current_id,10)+1;
        
        jQuery("#popup"+current_id).hide();
        jQuery("#popup"+new_id).show();

    });
});
/*end freelancer optional question*/
/*content creator optional questions*/


/*jQuery("input[id='radio_content_creator1']").click(function() {

   jQuery("#box_content_creator").show();


});
jQuery("input[id='radio_content_creator2']").click(function() {

   jQuery("#box_content_creator").hide();


});

*/

/*end content creator optional question*/


