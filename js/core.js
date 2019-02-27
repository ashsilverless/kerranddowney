jQuery(document).ready(function( $ ) {

/* ADD CLASS ON SCROLL*/
	
	$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 150) {
        $("header").addClass("scrolled");
        $("div.top-grad").addClass('hide');
    } else {
        $("header").removeClass("scrolled");
        $("div.top-grad").removeClass('hide');        
    }
});


/* SMOOTH SCROOL TO ANCHOR 

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
*/

/* ADD CLASS ON PAGE LOAD 

$(document).ready(function( $ ) {

$( "ul.nav li.nav-item" ).first().find('a').addClass( "active" );
$( ".tab-pane" ).first().addClass( "active" );
});
*/

/* GLOBAL OWL CAROUSEL SETTINGS */

$('.sl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: [" Previous", " Next"],
	navClass: ['owl-prev', 'owl-next'],
    dots:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
})

// ========== Controller for lightbox elements

    $(document).ready(function() {

        $('.lodge-gallery').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
        });
    });

/* CLASS AND FOCUS ON CLICK */
 
$(".nav-trigger").click(function() {   
	$('.nav-wrapper').toggleClass("active");     
	$('.hamburger').toggleClass("is-active");        
});

$(".sl-hero, #main, #colophon").click(function() {   
	$('.nav-wrapper').removeClass("active");     
	$('.hamburger').removeClass("is-active");      
});

$(".sl-card-header").click(function() {   
	$(this).toggleClass("active");     
});

$("a.expand-trigger").click(function() {   
	$(this).prev(".collapsed-copy").toggleClass("active");     
	$(this).toggleClass("active");
});


$('#checker').change(function(){
    if($(this).is(":checked")) {
        $('.checkbox').addClass('checked');
    } else {
        $('.checkbox').removeClass('checked');
    }
});

    $(".toggle").click(function() {   
      	$('.toggle.active').removeClass("active"); 
        $(this).addClass("active");   
    });

    $(".nav-link").click(function() {   
      	$('li.nav-item').removeClass("active"); 
        $(this).closest('.nav-item').addClass("active");   
    });



(function($) {

  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

$(window).scroll(function(event) {
  
  $(".map-wrapper").each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
    $('.camp-nav-wrapper').addClass("static"); 
    } else {
    $('.camp-nav-wrapper').removeClass("static"); 
    }
  });
  
});

});//Don't remove

// Parallax function

(function() {
  window.addEventListener('scroll', function(event) {
    var depth, i, layer, layers, len, movement, topDistance, translate3d;
    topDistance = this.pageYOffset;
    layers = document.querySelectorAll("[data-type='parallax']");
    for (i = 0, len = layers.length; i < len; i++) {
      layer = layers[i];
      depth = layer.getAttribute('data-depth');
      movement = -(topDistance * depth);
      translate3d = 'translate3d(0, ' + movement + 'px, 0)';
      layer.style['-webkit-transform'] = translate3d;
      layer.style['-moz-transform'] = translate3d;
      layer.style['-ms-transform'] = translate3d;
      layer.style['-o-transform'] = translate3d;
      layer.style.transform = translate3d;
    }
  });

}).call(this);
