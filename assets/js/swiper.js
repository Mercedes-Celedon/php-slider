const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    setWrapperSize: true,        
    slidesPerView: 'auto',  
    breakpoints: {
      1400: {
        slidesPerView: Math.floor(1400 / 418), 
      }
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    
    on: {
        slideChange: function () {
            const bullets = document.querySelectorAll('.swiper-pagination-bullet');
            bullets.forEach((bullet, index) => {
                bullet.classList.remove('merged'); 
                if (index === swiper.activeIndex || index === swiper.activeIndex + 1) {
                    bullet.classList.add('merged'); 
                }
            });
        },
    },
  });