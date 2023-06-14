$('.home-slider').owlCarousel({
    loop:true,
    margin:0,
    items:1,
    autoplay:true,
    navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
    nav:true,
    dots:false,
    autoplayHoverPause: true,
    autoplaySpeed: 800,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        767:{
            items:1
        },
        992:{
            items:1
        },
        1200:{
            items:1
        },
        1600:{
            items:1
        }
    }
  });

  $('.product-slider').owlCarousel({
    loop:true,
    margin:0,
    items:3,
    autoplay:true,
    navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
    nav:true,
    dots:false,
    autoplayHoverPause: true,
    autoplaySpeed: 800,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        767:{
            items:1
        },
        992:{
            items:3
        },
        1200:{
            items:3
        },
        1600:{
            items:3
        }
    }
  });