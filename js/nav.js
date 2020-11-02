$(document).ready(function () {
    //your code here
  });


$(document).on('mouseover', '.navbar-nav', function() {
    $('.nav-sub').slideDown(300);
});


$(document).on('mouseover', 'header', function() {
    $('.nav-sub').slideUp(300);
    $(this).children(".nav-sub").css("border","none");
});
$(document).on('mouseover', '.wrap', function() {
    $('.nav-sub').slideUp(300);
});

