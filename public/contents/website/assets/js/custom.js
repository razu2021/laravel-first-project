// as a jQuery plugin
$('#main-nav').hcOffcanvasNav({
  // options here
  width: 350,
});

// as a Vanilla JS plugin
var myNav = new hcOffcanvasNav('#main-nav', {
    // options here
});
// owl carusel 
$(document).ready(function(){
  $(".main-carousel-index").owlCarousel({
    items:2,
      loop:true,
      autoplay:true,
      responsive:{
        0:{
            items:1,
        },
        576:{
            items:1,
        },
        992:{
            items:1,
            nav:false
        },
        1200:{
            items:2,
            loop:true,
        }
    }
  });
  
});
$(document).ready(function(){
  $(".main-carousel").owlCarousel({
      items:1,
      loop:true,
      autoplay:true,
  });
  
});

// testimonial slider 

$(document).ready(function(){
  $("#testimonial-slider").owlCarousel({
      items:1,
      loop:true,
      autoplay:true,
      responsive:{
        0:{
            items:1,
        },
        992:{
            items:1,
            nav:false
        },
        1200:{
            items:1,
            loop:true,
        }
    }
  });
  
});

$(document).ready(function(){
  $(".imigration-testimonial").owlCarousel({
      items:3,
      loop:true,
      autoplay:true,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        992:{
            items:2,
            nav:false
        },
        1200:{
            items:3,
            nav:true,
            loop:true,
        }
    }
  });
  
});
$(document).ready(function(){
  $(".imigration-testimonial-legal").owlCarousel({
      items:3,
      loop:true,
      autoplay:true,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        992:{
            items:2,
            nav:false
        },
        1200:{
            items:3,
            nav:true,
            loop:true,
        }
    }
  });
  
});

$(document).ready(function(){
  $(".testimonial-carousel-about").owlCarousel({
      items:2,
      loop:true,
      autoplay:true,
      responsive:{
        0:{
            items:1,
            nav:true
        },
        992:{
            items:2,
            nav:false
        },
        1200:{
            items:2,
            nav:true,
            loop:true,
        }
    }
  });
  
});

// about slider year
$(document).ready(function(){
  $("#slider-year").owlCarousel({
    items:6,
    loop:true,
    autoplay:true,
  });
});
// about slider index page 
$(document).ready(function(){
  $(".slider-year-more-service").owlCarousel({
    items:6,
    loop:true,
    autoplay:true,
  });
});

// study abroad start here 
// most-populer-course-sliders
$(document).ready(function(){
  $(".most-populer-course-sliders").owlCarousel({
    items:3,
    loop:true,
    autoplay:true,
    responsive:{
      0:{
          items:1,
      },
      992:{
          items:2,

      },
      1200:{
          items:3,
          loop:true,
      }
  }
  });
});
//ourabout-client-slider
$(document).ready(function(){
  $(".ourabout-client-slider").owlCarousel({
    items:4,
    loop:true,
    autoplay:true,
    margin:10,
    responsive:{
      0:{
          items:1,
        
      },
      768:{
        items:2,
      },
      992:{
          items:2,
          nav:false
      },
      1200:{
          items:4,
          loop:true,
      }
  }
  });
});

// typed .js 
var typed = new Typed('.typed1',{
  strings: ['Universitas Law Chambers' ,
  ' Always Provide The Excellent Service'],
  typeSpeed: 50,
  loop:true,
});
// typed .js 
var typed = new Typed('.typed2',{
  strings: ['Universitas Law Chambers' ,
  ' Always Provide The Excellent Service'],
  typeSpeed: 50,
  loop:true,
});
// typed .js 
var typed = new Typed('.typed3',{
  strings: ['Study In USA' ,
  ' Study In UK ',
  ' Universitas law chamber'
],
  typeSpeed: 50,
  loop:true,
});
// typed .js 
var typed = new Typed('.typed4',{
  strings: ['Study In USA' ,
  ' Study In UK ',
  ' Universitas law chamber'
],
  typeSpeed: 50,
  loop:true,
});


// counter up script 




