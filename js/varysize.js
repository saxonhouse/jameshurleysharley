
function bigLogo() {
  jQuery('#logoimg').height('300px');
  jQuery(window).scroll(function() {
   jQuery('#logoimg').animate({height: "80px"}, 750);
 });
}
