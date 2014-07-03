/* equal thumbnails height */
$(".thumbnail").height(Math.max.apply(null, $(".thumbnail").map(function() { return $(this).height(); })));