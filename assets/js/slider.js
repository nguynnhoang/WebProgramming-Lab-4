$('.testimotinal-slider').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1
});



// pre btn
const prevBtn = $('.testimotinal-slider .slick-prev')
prevBtn.html('<i class="fa-solid fa-chevron-left"></i>')

// next btn
const nextBtn = $('.testimotinal-slider .slick-next')
nextBtn.html('<i class="fa-solid fa-chevron-right"></i>')