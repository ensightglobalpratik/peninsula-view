// JavaScript Document
var $ = jQuery.noConflict();

jQuery(document).ready(function(){
  
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

});