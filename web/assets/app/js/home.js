$(function(){
    $('.diaporama').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        adaptiveHeight: true,
        lazyLoad: 'ondemand',
        autoplay: true,
        autoplaySpeed: 5000,
    });
});
