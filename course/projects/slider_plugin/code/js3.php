// blank function to stop any other jquery interacting with our plugin
(function($) {
  // declares our function name & creates the object which we can later call in html
  $.fn.codifySlider = function() {

    // Set general variables
    // ====================================================================
    var totalWidth = 0;
    // Total width is calculated by looping through each gallery item and
    // adding up each width and storing that in `totalWidth` - tells jquery the box model width
    $(".gallery_item").each(function(){
        totalWidth = totalWidth + $(this).outerWidth(true);
    });
    // The maxScrollPosition is the furthest point the items should
    // ever scroll to. We always want the viewport to be full of images. - everything except for the margins
    var maxScrollPosition = totalWidth - $(".wrapper").outerWidth();
 
  }
}(jQuery));