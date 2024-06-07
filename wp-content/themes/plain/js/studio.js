$(function(){

  function studio_slick() {
    w = $(window).width();
    if (w <= 768) {
      $('.studio .img_area').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000
      });
    } else {
      $('.studio .img_area.slick-initialized').slick('unslick');
    }
  }
  $(window).resize(function(){
    studio_slick();
  });
  studio_slick();

});