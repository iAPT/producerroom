
    

//responsive horizontal carousel

(function($) {
    $(function() {
        var jcarousel = $('.jcarousel');

        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();

                if (width >= 700) {
                    width = width / 5;
                } else if (width >= 350) {
                    width = width / 2;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });

        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
    });
})(jQuery);

//end responsive horizontal carousel

//vertical caraousel
(function($) {
    $(function() {
        $('.jcarousel-vertical')
            .jcarousel({
                vertical: true
            });

        $('.jcarousel-control-prev-vertical')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next-vertical')
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination-vertical')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .jcarouselPagination();
    });
})(jQuery);
//end vertical carousel







 


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


/* process freelancer question to ajax*/
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
        var new_id=1;//to show the first freelancer related questions
        
        jQuery("#popup"+current_id).hide();
        jQuery("#popup_freelancer_related"+new_id).show();

    });
});
/*end freelancer*/


/* process freelancer related question to ajax*/
jQuery('#button_freelancer_related1').click(function(){


var freelancer_related_data = jQuery('#form_freelancer_related1').serialize();


  var data = {
        'action': 'freelancer_related',
        'data': freelancer_related_data       // We pass php values differently!
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ajax_object.ajax_url, data, function(response) {
        //hide the current div and show next div
        var result = $.parseJSON(response);
        if(result.length==2)//the for is the last form, so go to next popup div
        {
        var current_id=result[0];
        var new_id=result[1];
        jQuery("#popup_freelancer_related"+current_id).hide();
        jQuery("#popup"+new_id).show();
        }
        else
        {
        
        var current_id=result[0];
        var new_id=parseInt(current_id,10)+1;
        jQuery("#popup_freelancer_related"+current_id).hide();
        jQuery("#popup_freelancer_related"+new_id).show();
        }
    });
});


jQuery('#button_freelancer_related2').click(function(){


var freelancer_related_data = jQuery('#form_freelancer_related2').serialize();


  var data = {
        'action': 'freelancer_related',
        'data': freelancer_related_data       // We pass php values differently!
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ajax_object.ajax_url, data, function(response) {
        //hide the current div and show next div
        var result = $.parseJSON(response);
        if(result.length==2)//the for is the last form, so go to next popup div
        {
        var current_id=result[0];
        var new_id=result[1];
        jQuery("#popup_freelancer_related"+current_id).hide();
        jQuery("#popup"+new_id).show();
        }
        else
        {
        
        var current_id=result[0];
        var new_id=parseInt(current_id,10)+1;
        jQuery("#popup_freelancer_related"+current_id).hide();
        jQuery("#popup_freelancer_related"+new_id).show();
        }
        
        
        

    });
});
/*end freelancer related*/

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


jQuery("input[id='radio_is_freelancer1']").click(function() {

   jQuery("#box_is_freelancer").show();


});
jQuery("input[id='radio_is_freelancer2']").click(function() {

   jQuery("#box_is_freelancer").hide();


});























