$(document).ready(function(){
   console.log('about.js');
    $('.splide__list').slick({ 
        //  slidesToScroll: 1,
        //  slidesToShow : 4,
        //  centerMode :true , 
        //  dots: false ,
        //  infinite:true ,
        //  autoplay: true ,
        // autoplaySpeed: 100000, 
        // rtl : true , 
        // adaptiveHeight : true , 
        // mobileFirst: true , 

        responsive: [{

            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows : true ,
              autoplay : true , 
              infinite : true , 
              autoplaySpeed  :700,
              centerPadding : '0px',
            }
      
          },

          {

            breakpoint: 992,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 4,
              arrows : true ,
              centerPadding : '0px',
            }
      
          }
        ]
    });
  }); 