$(document).ready(function(){
let expertises = [];
let page = 1;
let orderby = '';
let order = '';
let lang ='';
	

$(".construction-services-search__active-filters").on("click", ".filter__cross", function(){
	
	page = 1;
	
	let i = expertises.indexOf( $(this).parent().attr('title') );
	
	if (event.preventDefault) {
        event.preventDefault();
    } else {
        event.returnValue = false;
    }
	
	expertises.splice(i, 1); 

    data = {
        action: 'filter_posts',
        afp_nonce: afp_vars.afp_nonce,
        post_type: "work",
        expertises: expertises,
		page: page,
		orderby: orderby,
		order: order
    };

    $.ajax({ 
        type: "post",
        dataType: "json",
        url: afp_vars.afp_ajax_url, 
        data: data, 
        success: function(data, textStatus, XMLHttpRequest) {
            console.log(data);
            // Restore div visibility
            $('.work-results').fadeOut()
                .queue(function(n) {
                        $(this).html(data.response);
                        n();
            }).fadeIn();
        },
        error: function( XMLHttpRequest, textStatus, errorThrown ) {
            /*console.log( MLHttpRequest );
            console.log( textStatus );
            console.log( errorThrown );*/
            $('.work-results').fadeOut()
                .queue(function(n) {
                        $(this).html("No items found. ");
                        n();
            }).fadeIn();
        }
    });
	
    let text = $(this).parent().find('span').text();
    $('.construction-services-search__select > ul').children().each(function() {
        let currentElement = $(this);
        if (currentElement.find('span').text() == text) {
            currentElement.find('div').removeClass('active-radio');
        }
    });
    $(this).parent().remove();
});
	
$('.work-filter').click( function(event) {
	
	page = 1;
	
    if (event.preventDefault) {
        event.preventDefault();
    } else {
        event.returnValue = false;
    }
	
	let i = expertises.indexOf( $(this).attr('title') );
	
	if (i === -1 ) {
		expertises.push($(this).attr('title'));
	} else {
		expertises.splice(i, 1);
	}    

    data = {
        action: 'filter_posts',
        afp_nonce: afp_vars.afp_nonce,
        expertises: expertises,
		page: page,
		orderby: orderby,
		order: order
    };

    $.ajax({ 
        type: "post",
        dataType: "json",
        url: afp_vars.afp_ajax_url, 
        data: data, 
        success: function(data, textStatus, XMLHttpRequest) {
            //console.log(data);
            $('.work-results').fadeOut()
                .queue(function(n) {
                        $(this).html(data.response);
                        n();
            }).fadeIn();
        },
        error: function( XMLHttpRequest, textStatus, errorThrown ) {
            $('.work-results').fadeOut()
                .queue(function(n) {
                        $(this).html("No items found. ");
                        n();
            }).fadeIn();
        }
    });
});

$(".work-results").on("click", ".page-numbers", function(event){
	
    if (event.preventDefault) {
        event.preventDefault();
    } else {
        event.returnValue = false;
    }
	
	page = $(this).text();

    data = {
        action: 'filter_posts',
        afp_nonce: afp_vars.afp_nonce,
        expertises: expertises,
		page: page,
		orderby: orderby,
		order: order
    };

    $.ajax({ 
        type: "post",
        dataType: "json",
        url: afp_vars.afp_ajax_url, 
        data: data, 
        success: function(data, textStatus, XMLHttpRequest) {
            console.log(data);
            $('.work-results').fadeOut()
                .queue(function(n) {
                        $(this).html(data.response);
                        n();
            }).fadeIn();
        },
        error: function( XMLHttpRequest, textStatus, errorThrown ) {
            $('.work-results').fadeOut()
                .queue(function(n) {
                        $(this).html("No items found. ");
                        n();
            }).fadeIn();
        }
    });
	
	$('.page-numbers').attr( "href", "#" );
});

$(".service-top").on("click", "a", function(event){
	
    if (event.preventDefault) {
        event.preventDefault();
    } else {
        event.returnValue = false;
    }
	
	page = 1;
	
	if ($(this).attr('id') == 'select-sort-price-asc') {
		orderby = 'service_price';
		order = 'asc';
	}
	
	if ($(this).attr('id') == 'select-sort-price-desc') {
		orderby = 'service_price';
		order = 'desc';
	}
	
	data = {
        action: 'filter_posts',
        afp_nonce: afp_vars.afp_nonce,
        expertises: expertises,
		page: page,
		orderby: orderby,
		order: order
    };
	

    $.ajax({ 
        type: "post",
        dataType: "json",
        url: afp_vars.afp_ajax_url, 
        data: data, 
        success: function(data, textStatus, XMLHttpRequest) {
            console.log(data);
            $('.work-results').fadeOut()
                .queue(function(n) {
                        $(this).html(data.response);
                        n();
            }).fadeIn();
        },
        error: function( XMLHttpRequest, textStatus, errorThrown ) {
            $('.work-results').fadeOut()
                .queue(function(n) {
                        $(this).html("No items found.");
                        n();
            }).fadeIn();
        }
    });
	
	$('.page-numbers').attr( "href", "#" );
});

$(".catalog__item").click(function(e) {

    if($(e.target).hasClass('catalog__arrow') || $(e.target).hasClass('arrow')) {
        $(this).toggleClass('active-catalog-filter');
    } else {
        $(this).removeClass('active-catalog-filter');
        return true;
    }

    return false;

});

$(".mobile-box").click(function(e) {
    if($(e.target).hasClass('mobile-box') || $(e.target).hasClass('modal-menu__sublist-title') || $(e.target).hasClass('modal-menu__sublist-items') || $(e.target).hasClass('header-arrow') || $(e.target).hasClass('header-span')) {
        $(".mobile-menu__list").css('display', 'block');
    } 
});

});