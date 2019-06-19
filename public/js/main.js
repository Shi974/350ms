$(document).ready(function(){
    
    // FONCTION JQUERY HOVER IMAGE
    // class="events_image"
    $('.events_image').hover(function() {
        $(".events_image").addClass('img_hover');
    }, function() {
        $(".events_image").removeClass('img_hover');
    });
});