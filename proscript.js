

<!--scroll-up button-->
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#topcontrol').fadeIn();
            } else {
                $('#topcontrol').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#topcontrol').click(function () {
            $('#topcontrol');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#topcontrol');

});



$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});





$(document).ready(function() {
  $('#news-carousel').carousel({
    pause: true,
    interval: false,
  });
});
        