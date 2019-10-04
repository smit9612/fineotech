//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
  if ($(".navbar").offset().top > 0) {
    $(".navbar-fixed-top").addClass("top-nav-collapse");
  } else {
    $(".navbar-fixed-top").removeClass("top-nav-collapse");
  }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
// $(function() {
//   $(document).on("click", "a.page-scroll", function(event) {
//     var $anchor = $(this);
//     $("html, body")
//       .stop()
//       .animate(
//         {
//           scrollTop: $($anchor.attr("href")).offset().top
//         },
//         1500,
//         "easeInOutExpo"
//       );
//     event.preventDefault();
//   });
// });

$(function() {
  $(document).on("click", "a.page-scroll", function(event) {
    var $anchor = $(this);
    var hrefData = $anchor.attr("href").replace("/", "");
    var topScrooll = $(hrefData).offset().top - 100;
    $("html, body")
      .stop()
      .animate({ scrollTop: topScrooll }, 1500, "easeInOutExpo");
    event.preventDefault();
  });
});
