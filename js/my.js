$(document).ready(function(){
   $('.bxslider').bxSlider({
    mode: 'horizontal',
    auto:true,
    slideWidth: 1500,
  }); 
    $('.menu-togglr').on('click',function(){
        $('#mainav').slideToggle('fast');
        $(this).toggleClass('active');
    });
});