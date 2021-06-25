
// slicknav-script

  $(function(){
    $('#menu').slicknav();
  });

// slicknav-script

// WOW-script

 new WOW().init();

// WOW-script

// owl-carousel script

  $('.testimonial_slider').slick({
  dots: false,
  arrows:true,
  infinite:true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll:1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

  $('.Download_Slider').slick({
  centerMode: true,
  arrows:false,
  infinite:true,
  autoplay:true,
  centerPadding: '0px',
  slidesToShow: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll:1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
});

// owl-carousel script



//plugin bootstrap minus and plus

