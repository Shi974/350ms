$(document).ready(function(){
    
    // FONCTION JQUERY HOVER IMAGE
    $('.events_image').hover(function() {
        $(".events_image").addClass('img_hover');
    }, function() {
        $(".events_image").removeClass('img_hover');
    });
});