$('.our-concierge-slider').slick({
  arrows: true,
  dots: false,
  infinite: true,
  slidesToShow: 1, 
  slidesToScroll: 1,
  fade: true,
  cssEase: 'linear',
  prevArrow: '.prev',
  nextArrow: '.next',
  responsive: [
  {
    breakpoint: 1100,
    settings: { 
      slidesToShow: 1,
      slidesToScroll:1, 
      arrows: true,
    }
  },
  {
    breakpoint: 900,
    settings: { 
      slidesToShow: 1,
      slidesToScroll: 1,  
    }
  },
  ]
});

$('.testimonials-slider').slick({
  arrows: true,
  dots: false,
  infinite: true,
  slidesToShow: 1, 
  slidesToScroll: 1, 
  prevArrow: '.prev',
  nextArrow: '.next',
  responsive: [
  {
    breakpoint: 1100,
    settings: { 
      slidesToShow: 1,
      slidesToScroll:1, 
      arrows: true,
    }
  },
  {
    breakpoint: 900,
    settings: { 
      slidesToShow: 1,
      slidesToScroll: 1,  
    }
  },
  ]
});

$('.products-slider').slick({
  arrows: true,
  dots: false,
  infinite: true,
  slidesToShow: 3, 
  slidesToScroll: 1,  
  prevArrow: '.prev2',
  nextArrow: '.next2',
  responsive: [
  {
    breakpoint: 1100,
    settings: { 
      slidesToShow: 2,
      slidesToScroll:1, 
      arrows: true,
    }
  },
  {
    breakpoint: 600,
    settings: { 
      slidesToShow: 1,
      slidesToScroll: 1,  
    }
  },
  ]
});

$('.key-highlights_slider').slick({
  arrows: true,
  dots: false,
  infinite: true,
  slidesToShow: 3, 
  slidesToScroll: 3,  
  prevArrow: '.prev',
  nextArrow: '.next',
  responsive: [
  {
    breakpoint: 1100,
    settings: { 
      slidesToShow: 2,
      slidesToScroll:2, 
      arrows: true,
    }
  },
  {
    breakpoint: 600,
    settings: { 
      slidesToShow: 1,
      slidesToScroll: 1,  
    }
  },
  ]
});



$('.slider-luxury').slick({
  arrows: true,
  dots: false,
  infinite: true,
  slidesToShow: 1, 
  slidesToScroll: 1,
  fade: true,
  cssEase: 'linear',
  prevArrow: '.prev',
  nextArrow: '.next' 
});


$(document).ready(function () {
  $('.finding__items').slick({
    mobileFirst: true, 
    prevArrow: '.prev3',
    nextArrow: '.next3',
    responsive: [
    {
      breakpoint: 700,
      settings: "unslick",
      slidesToShow: 1,
      arrows: true,
    }
    ]
  });
});

$(document).ready(function () {
  $('.fixed-concierge .fixed-image__left').slick({
    fade: true,
    mobileFirst: true, 
    adaptiveHeight: true,
    prevArrow: '.prev3',
    nextArrow: '.next3',
    responsive: [
    {
      breakpoint: 700,
      settings: "unslick",
      slidesToShow: 1,
      arrows: true,
    }
    ]
  });
});


$(window).scroll(function(){
  if ($(this).scrollTop() > 100) {
    $('.header').addClass('pre-fixed');
  } else {
    $('.header').removeClass('pre-fixed');
  }
  if ($(this).scrollTop() > 150) {
    $('.header').addClass('fixed');
  } else {
    $('.header').removeClass('fixed');
  }
});

$('.header__burger').click(function(event) {
  $('.header__burger').toggleClass('active');  
  $('.menu-popup').toggleClass('block');
  $('body').toggleClass('hidden');
});

// Анимация картинок
let revealContainers = document.querySelectorAll(".reveal");

revealContainers.forEach((container) => {
  let image = container.querySelector("img");
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      toggleActions: "restart none none reset"
    }
  });

  tl.set(container, { autoAlpha: 1 });
  tl.from(container, 1.5, {
    xPercent: -100,
    ease: Power2.out
  });
  tl.from(image, 1.5, {
    xPercent: 100,
    scale: 1.3,
    delay: -1.5,
    ease: Power2.out
  });
});

// анимация фона
gsap.utils.toArray(".color").forEach(function(elem) {
  var color = elem.getAttribute('data-color');
  ScrollTrigger.create({
    trigger: elem,
    start:'top 70%',
    end:'bottom 30%',
    onEnter: () => gsap.to('.color', {backgroundColor:color}), 
    onLeave: () => gsap.to('.color', {backgroundColor:'#ffffff'}), 
    onLeaveBack: () => gsap.to('.color', {backgroundColor:'#ffffff'}), 
    onEnterBack: () => gsap.to('.color', {backgroundColor:color}), 
  });

});

gsap.utils.toArray(".text-an").forEach(function(elem) {  
  ScrollTrigger.create({
    trigger: ".make-your", 
    start:'top 50%',   
    onEnter: () => gsap.to(".make-your img",{scale:"1"}),  
    onLeave: () => gsap.to(".make-your img",{scale:"0.2"}),
    onLeaveBack: () => gsap.to(".make-your img",{scale:"0.2"}),
    onEnterBack: () => gsap.to(".make-your img",{scale:"1"}), 
  });

});


 // анимация текста 
 gsap.set('.h2', { autoAlpha: 1 })
 gsap.utils.toArray(".text-an").forEach((section, i) => { 
  gsap.from(section.querySelectorAll(".h2"), {
    scrollTrigger: {
      trigger: section, 
      toggleActions: "restart none none reset", 
    },
    duration: 2,
    yPercent: 200,
    ease: "power4",
    stagger: 0.1
  });
});

 gsap.to('.stroll__body img', { 
  scale:1,
  ease: 'none', 
  scrollTrigger: {
    trigger: '.stroll,.scroll',
    start:'top 50%',   
    end:'bottom 70%',
    scrub: true 
  }
  
}) 

 gsap.to('.stroll__body', { 
  scaleX:1, scaleY:1,
  ease: 'none',  
  scrollTrigger: {
    trigger: '.stroll,.scroll',
    start:'top 50%', 
    end:'bottom 70%',
    scrub: true 
  }
  
}) 



 gsap.to('.scroll__body img', { 
  scaleX:1, scaleY:1,
  ease: 'none', 
  scrollTrigger: {
    trigger: '.scroll',
    start:'top 10%', 
    end:'bottom 60%',
    scrub: true 
  }
  
}) 

 gsap.to('.scroll__body', { 
  scaleX:1, scaleY:1,
  ease: 'none',  
  scrollTrigger: {
    trigger: '.scroll',
    start:'top 10%', 
    end:'bottom 60%',
    scrub: true 
  }
  
}) 
// footer

gsap.to( ".footer .container", {  
  scrollTrigger: {
    trigger: "main",
    start: "top 100%",
    end: "+=" + document.querySelector('.footer').offsetHeight,
    scrub: 0.5, 
  }
})


//slider

/*function getVals(){
  // Get slider values
  let parent = this.parentNode;
  let slides = parent.getElementsByTagName("input");
  let slide1 = parseFloat( slides[0].value );
  let slide2 = parseFloat( slides[1].value );
  // Neither slider will clip the other, so make sure we determine which is larger
  if( slide1 > slide2 ){ let tmp = slide2; slide2 = slide1; slide1 = tmp; }
  
  let displayElement = parent.getElementsByClassName("rangeValues")[0];
  displayElement.innerHTML = "from<span> € " + slide1 + "</span>  to<span> € " + slide2 + "</span>";
}

window.onload = function(){
  // Initialize Sliders
  let sliderSections = document.getElementsByClassName("range-slider");
  for( let x = 0; x < sliderSections.length; x++ ){
    let sliders = sliderSections[x].getElementsByTagName("input");
    for( let y = 0; y < sliders.length; y++ ){
      if( sliders[y].type ==="range" ){
        sliders[y].oninput = getVals;
            // Manually trigger event first time to display values
            sliders[y].oninput();
          }
        }
      }
    }*/



    $(document).on( "click",".button",  function(){ 
      var _item = $(this).closest('.search__areas');    
      _item.find('.search_list').toggleClass('active');  
    });
    $(document).on( "click",".button",  function(){ 
      var _item = $(this).closest('.search__rooms');    
      _item.find('.search_list').toggleClass('active');   
    });
    $(document).on( "click",".button",  function(){ 
      var _item = $(this).closest('.search__range');    
      _item.find('.s-range').toggleClass('active');   
    });

    $(document).on( "click",".search_list:not(#search-date)",  function(){ 
     	$(this).toggleClass('active');
    });


//experiences

var sections = $('.experiences-page__item')
, nav = $('.experiences-menu')
, nav_height = nav.outerHeight();

$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();
  
  sections.each(function() {
    var top = $(this).offset().top - 150,
    bottom = top + $(this).outerHeight();
    
    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('active');
      sections.removeClass('active');
      
      $(this).addClass('active');
      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
    }
  });
});

nav.find('a').on('click', function () {
  var $el = $(this)
  , id = $el.attr('href');
  
  $('html, body').animate({
    scrollTop: $(id).offset().top - 120
  }, 500);
  
  return false;
});


$(window).scroll(function(){
  if ($(this).scrollTop() > 1080) {
    $('.experiences-menu').addClass('pre-fixed');
  } else {
    $('.experiences-menu').removeClass('pre-fixed');
  }
  if ($(this).scrollTop() > 1080) {
    $('.experiences-menu').addClass('fixed');
  } else {
    $('.experiences-menu').removeClass('fixed');
  }
});


$("body").on("click",".link-to", function (event) {
  event.preventDefault();
  var id = $(this).attr('href'),
  top = $(id).offset().top - 70;
  $('body,html').animate({scrollTop: top}, 1200);
});
    
gsap.to(".paralax-scroll", {
      backgroundPosition: "50% 0%",
      ease: "none",
      scrollTrigger: {
        trigger: ".paralax-scroll",
        start: "top bottom",
        end: "bottom top",
        scrub: true
      }
});

$(document).on( "click",".filter-item__top",  function(){ 
  var _item = $(this).closest('.filter-item');
  _item.find('.filter-item__body').slideToggle();   
  _item.find('.filter-item__top').toggleClass('active');  
   
});  

$(document).on( "click",".filtr-btn",  function(){ 
  var _item = $(this).closest('.products');
  _item.find('.products__body .left').slideToggle();    
   
});  



$(document).on( "click",".more",  function(){ 
  var _item = $(this).closest('.testimonials__item');
  _item.find('.testimonials__desc').animate({height: _item.find(".testimonials__desc").get(0).scrollHeight}, 1100 );  
    _item.find(".testimonials__desc").removeClass('hide');
    $(this).addClass('hide');
    return false; 
   
});

 
 $('body').on('click', '.password-control', function(){
  if ($('.password-input').attr('type') == 'password'){
    $(this).addClass('view');
    $('.password-input').attr('type', 'text');
  } else {
    $(this).removeClass('view');
    $('.password-input').attr('type', 'password');
  }
  return false;
});