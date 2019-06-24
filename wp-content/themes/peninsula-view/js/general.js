// JavaScript Document
var $ = jQuery.noConflict();
jQuery(document).ready(function(){  

      $('.enumenu_ul').responsiveMenu({
        'menuIcon_text': '',
        onMenuopen: function() {}
    });

    /* click on link menu will be closed */
    $("nav ul li a").on("click",function(){
        if($("body").hasClass("mob")){
            $(".menu-box").trigger("click");
        }        
    });

    $('a[href*=\\#]:not([href=\\#])').click(function(e){
        e.preventDefault();       
        var target_name = $(this).attr('href');
        if ($(window).innerWidth() > 991) {
            if(target_name.length){
               $('html,body').animate({ scrollTop: $(target_name).offset().top}, 2000);
            }
        }
        else{
            if(target_name.length){
               $('html,body').animate({ scrollTop: $(target_name).offset().top }, 2000);
            }
        }
    });  

    $('#banner-slider').slick({
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        draggable: true,
        speed: 700,
        dots: true,
        fade: true,
        cssEase: 'linear'
    });

    $('#apartments-slider').slick({
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        draggable: true,
        speed: 700,
        dots: true,
        fade: true,
        cssEase: 'linear'
    });

    $('#location-slider').slick({
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        draggable: true,
        speed: 700,
        dots: true,
        fade: true,
        cssEase: 'linear'
    });

    setTimeout(function(){
        $(".ul_accordion li:first-child a.acco_link").trigger("click");    
    },500);
    
/* map */
$(".map-sec-strip a").on("click",function(e){
      e.preventDefault();
      $(".map-sec").slideToggle();
      $(".map-sec-strip").toggleClass("show-map");
      if($(".map-sec-strip").hasClass("show-map")){
            $(this).text("Hide Map");
      }
      else{
            $(this).text("View Map");
      }
});

/* Default accodrion */
$('.acco_link').on("click",function(e) {  
    e.preventDefault();               
    var index_num = $(this).parent().index();
    $(".floor-img-wrapper").each(function(){
        var index_match = $(this).index();
        if(index_num == index_match){
            $(".floor-img-wrapper").removeClass("active");
            $(this).addClass("active");
        }
    }); 
    if($(this).next('.accordion_content').is(':hidden') == true) {  
        $('.accordion_content').slideUp(400);
        $(this).parent().addClass('active').siblings().removeClass("active");                      
        $(this).next('.accordion_content').slideDown(400);
    }
    else{
         $(".ul_accordion li").removeClass("active");
         $('.accordion_content').slideUp('normal');  
    }
});
}); //end of ready function