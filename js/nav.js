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


/*
$(document).on('mouseover', 'div', function() {
    if (!$(this).hasClass('navbar>container')) {
        $('.nav-sub').slideUp(300);
    }
});*/


// var zoomx = 100;
//   $(document).ready(function() {
//     $(".gnb").hover(
//       function() {
//         $(".snb").stop().slideDown(400);
//       },
//       function() {
//         $(".snb").stop().slideUp(600);
//       }
//     );

//     $(".snb").hover(
//       function() {
//         $(".snb").stop().slideDown(400);
//       },
//       function() {
//         $(".snb").stop().slideUp(600);
//       }
//     );

//     $(".tabBtn").hover(
//       function() {

//         $(this).children(".icon_normal").css("display","none");
//         $(this).children(".icon_over").css("display","block");
//       },
//       function() {
//         $(this).children(".icon_over").css("display","none");
//         $(this).children(".basic").css("display","block");
//       }
//     );

//     $(".tabBtn").click(
//       function() {

//         $("."+$(this).attr("tarx")).children(".icon_normal").addClass("basic");
//         $("."+$(this).attr("tarx")).children(".icon_over").removeClass("basic");
//         $(this).children(".icon_over").addClass("basic");
//         $(this).children(".icon_normal").removeClass("basic");

//         $("."+$(this).attr("tarx")).children(".icon_over").css("display","none");
//         $("."+$(this).attr("tarx")).children(".icon_normal").css("display","none");
//         $("."+$(this).attr("tarx")).children(".basic").css("display","block");


//         $("."+$(this).attr("tarc")).css("display","none");
//         $("#"+$(this).attr("tar")).css("display","block");

//         $("#"+$(this).attr("tarmc")).attr("href", $(this).attr("tarm"));

//       }
//     );

// //class="tabBtn tabBtngroupA" tar="lastA_1" tarc="lastA_1" tarx="tabBtngroupA"
//   });
// function body_zoomin() {
//   zoomx = zoomx + 10;
//   $("body").css("zoom",zoomx + "%");
// }
// function body_zoomout() {
//   zoomx = zoomx - 10;
//   $("body").css("zoom",zoomx + "%");
// }
// function body_zoomdef() {
//   zoomx = 100;
//   $("body").css("zoom",zoomx + "%");
// }
// function newWin(url,w,h) {
// window.open
// (url,'new_win','width='+w+',height='+h+',toolbars=no,menubars=no,scrollbars=auto');
// }
