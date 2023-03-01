$(document).ready(function(){

$('.slider__list').slick({
    dots: true,
    arrows:true,
    autoplaySpeed:5000,
    infinite: true,
    speed: 1500,
    autoplay:true,
    fade: true,
});

$('.owl-carousel').owlCarousel({
    loop:false,
    margin:5,
    data:true,
    nav:false,
    autoplaySpeed:2000,
    autoplay:true,
      responsive:{
        0:{
          items:1
        },

        500:{
          items:2
        },
  
        800:{
          items:3
        },
  
        1000:{
          items:4
        },
  
        1300:{
          items:5
        }
    }
});

$('.fotogalereya_in__list1').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: false,
  arrows: true,
  fade: true,
  asNavFor: '.fotogalereya_in__list2'
});

$('.fotogalereya_in__list2').slick({
              arrows: false,
              asNavFor:'.fotogalereya_in__list1',
              dots: false,
              infinite: false,
              speed: 300,
              slidesToShow: 7,
              slidesToScroll: 1,
              focusOnSelect: true,
               responsive: [
             {
            breakpoint: 1630,
            settings: {
            slidesToShow: 6,
            slidesToScroll: 1,
            infinite: true,
            dots: false
            }
          },
           {
            breakpoint: 1440,
            settings: {
            slidesToShow: 5,
           slidesToScroll: 1
            }
           },

           {
            breakpoint: 1180,
            settings: {
            slidesToShow: 4,
           slidesToScroll: 1
            }
           },

           {
            breakpoint: 900,
            settings: {
            slidesToShow: 3,
           slidesToScroll: 1
            }
           },

           {
            breakpoint: 600,
            settings: {
            slidesToShow: 2,
           slidesToScroll: 1
            }
           },
         ]
});

})