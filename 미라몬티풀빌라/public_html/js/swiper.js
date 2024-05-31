$(function (){
  const swiper1 = new Swiper('.swiper1', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,
    spaceBetween: 0,
    observer: true,
    observeParents: true,
    allowTouchMove: false,
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'fade',
  
    // If we need pagination
      pagination: {
        el: '.swiper1 .swiper-pagination',
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
          const currentSlide = ('0' + (this.realIndex + 1)).slice(-2); 
          const totalSlides = ('0' + this.slides.length).slice(-2); 
          return '<span class="' + currentClass + '">' + currentSlide + '</span>' +
            ' / ' +
            '<span class="' + totalClass + '">' + totalSlides + '</span>';
        },
        formatFractionCurrent: function (number) {
          return ('0' + number).slice(-2); 
        },
        formatFractionTotal: function (number) {
          return ('0' + number).slice(-2);
        },
      },

    // Navigation arrows
    navigation: {
      nextEl: '.mainbtn2',
      prevEl: '.mainbtn1',
    },
    
    // Auto Play
    autoplay: {
      delay: 2500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    }
    
  });

  var bullet = ['<i class="fa-solid fa-circle"></i>수영장 / 실내수영장', '<i class="fa-solid fa-circle"></i>전객실 스파', '<i class="fa-solid fa-circle"></i>독채전용바베큐장','<i class="fa-solid fa-circle"></i>잔디정원','<i class="fa-solid fa-circle"></i>개별바베큐','<i class="fa-solid fa-circle"></i>숯 & 그릴','<i class="fa-solid fa-circle"></i>호텔식 침구류','<i class="fa-solid fa-circle"></i>밸리뷰'];
  const swiper2 = new Swiper('.swiper2', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,
    spaceBetween: 0,
    observer: true,
    observeParents: true,
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
  
    pagination: {
      el: '.swiper-pagination-2', // 페이지네이션 요소를 지정
      clickable: true,
      bulletClass: 'custom-pagination-item',
      renderBullet: function (index, className) {
        return '<div class="' + className + '"><span>' + (bullet[index]) + '</span></div>';
      },
    },
     // Auto Play
     autoplay: {
      delay: 2500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    }
    
  });


  const swiper3 = new Swiper('.swiper3', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 3,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
  
    pagination: {
      el: '.swiper3 .swiper-pagination',
      type: "fraction",
      renderFraction: function (currentClass, totalClass) {
        const currentSlide = ('0' + (this.realIndex + 1)).slice(-2); 
        const totalSlides = ('0' + this.slides.length).slice(-2); 
        return '<span class="' + currentClass + '">' + currentSlide + '</span>' +
          ' / ' +
          '<span class="' + totalClass + '">' + totalSlides + '</span>';
      },
      formatFractionCurrent: function (number) {
        return ('0' + number).slice(-2); 
      },
      formatFractionTotal: function (number) {
        return ('0' + number).slice(-2);
      },
    },

    // Navigation arrows
    navigation: {
      nextEl: '.prebtn2',
      prevEl: '.prebtn1',
    },
    
    // Auto Play
    autoplay: {
      delay: 2500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 3,
        spaceBetween: 0
      }
    }
    
  });



  const swiper5 = new Swiper('.swiper5', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,
    spaceBetween: 0,
    observer: true,
    observeParents: true,
    allowTouchMove: false,
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'fade',
  
    // If we need pagination
      pagination: {
        el: '.swiper5 .swiper-pagination',
        type: "fraction",
        renderFraction: function (currentClass, totalClass) {
          const currentSlide = ('0' + (this.realIndex + 1)).slice(-2); 
          const totalSlides = ('0' + this.slides.length).slice(-2); 
          return '<span class="' + currentClass + '">' + currentSlide + '</span>' +
            ' / ' +
            '<span class="' + totalClass + '">' + totalSlides + '</span>';
        },
        formatFractionCurrent: function (number) {
          return ('0' + number).slice(-2); 
        },
        formatFractionTotal: function (number) {
          return ('0' + number).slice(-2);
        },
      },

    // Navigation arrows
    navigation: {
      nextEl: '.aboutbtn2',
      prevEl: '.aboutbtn1',
    },
    
    // Auto Play
    autoplay: {
      delay: 2500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    }
  });

  const swiper4 = new Swiper('.swiper4', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,
    spaceBetween: 0,
    observer: true,
    observeParents: true,
    allowTouchMove: false,
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'fade',
  
    // If we need pagination
      pagination: {
        el: '.swiper4 .swiper-pagination',
        type: "fraction",
      },

    // Navigation arrows
    navigation: {
      nextEl: '.roombtn2',
      prevEl: '.roombtn1',
    },
    
    // Auto Play
    autoplay: {
      delay: 2500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 1,
        spaceBetween: 0
      }
    }
  });

  const swiper7 = new Swiper('.swiper7', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 3,
    spaceBetween: 30,
    observer: true,
    observeParents: true,
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
  
    pagination: {
      el: '.swiper7 .swiper-pagination',
      type: "fraction",
      renderFraction: function (currentClass, totalClass) {
        const currentSlide = ('0' + (this.realIndex + 1)).slice(-2); 
        const totalSlides = ('0' + this.slides.length).slice(-2); 
        return '<span class="' + currentClass + '">' + currentSlide + '</span>' +
          ' / ' +
          '<span class="' + totalClass + '">' + totalSlides + '</span>';
      },
      formatFractionCurrent: function (number) {
        return ('0' + number).slice(-2); 
      },
      formatFractionTotal: function (number) {
        return ('0' + number).slice(-2);
      },
    },

    // Navigation arrows
    navigation: {
      nextEl: '.prebtn2',
      prevEl: '.prebtn1',
    },
    
    // Auto Play
    autoplay: {
      delay: 2500,
     },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 640px
      500: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is >= 960px
      990: {
        slidesPerView: 3,
        spaceBetween: 0
      }
    }
    
  });


  const swiper6 = new Swiper('.swiper6', {
    speed:600,
    // Optional parameters
    // 슬라이드 수 설정
    slidesPerView: 1,

    observer: true,
    observeParents: true,
    // direction: 'horizontal', 'vertical',
    direction: 'horizontal',
    loop: true,
  
    // effect: 'slide', 'fade', 'cube', 'coverflow', 'flip', 'creative', 'cards'
    effect: 'slide',
  
    pagination: {
      el: '.swiper6 .swiper-pagination',
      type: "fraction",
      renderFraction: function (currentClass, totalClass) {
        const currentSlide = ('0' + (this.realIndex + 1)).slice(-2); 
        const totalSlides = ('0' + this.slides.length).slice(-2); 
        return '<span class="' + currentClass + '">' + currentSlide + '</span>' +
          ' / ' +
          '<span class="' + totalClass + '">' + totalSlides + '</span>';
      },
      formatFractionCurrent: function (number) {
        return ('0' + number).slice(-2); 
      },
      formatFractionTotal: function (number) {
        return ('0' + number).slice(-2);
      },
    },

    // Navigation arrows
    navigation: {
      nextEl: '.specialbtn2',
      prevEl: '.specialbtn1',
    },
    
    // Auto Play
    autoplay: {
      delay: 2500,
     },
   
    
  });
});
  