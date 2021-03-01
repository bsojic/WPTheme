// Sticky header
jQuery(window).scroll(function() {    
  var height = jQuery(window).scrollTop();  
  if(height  > 2) {
    jQuery(".nav").css({"position": "fixed"});
    jQuery(".nav").css({"z-index": "3"});
    jQuery(".nav").css({"background": "white"});
  } else{
    jQuery(".nav").css({"position": "relative"});
  }
});
// Contant us Box
jQuery(document).ready(function(){
  jQuery(".contact-us").click(function(){
    jQuery(".contact-box").animate({width: 'toggle'});
  });
});
// Slider
jQuery(function() {
  jQuery('.slide').slide({

    // auto play
    isAutoSlide: true, 

    // pause on hover
    isHoverStop: true,

    // pause when window loses focus
    isBlurStop: true,

    // shows pagination bullets
    isShowDots: true,

    // load all images on load
    isLoadAllImgs: false,

    // sliding speed
    slideSpeed: 10000,

    // switching speed
    switchSpeed: 500,

    // click, mouseover or mouseenter
    dotsEvent: 'click',

    // default CSS classes
    dotsClass: 'dots',  
    dotActiveClass: 'active', 
    arrowClass: 'arrow',
    arrowLeftClass: 'arrow-left', 
    arrowRightClass: 'arrow-right'

  });
});
