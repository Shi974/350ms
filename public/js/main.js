$(document).ready(function () {

    // FONCTION JQUERY HOVER IMAGE
    $('.events_image').hover(function () {
        $(".events_image").addClass('img_hover');
    }, function () {
        $(".events_image").removeClass('img_hover');
    });
});



// FONCTION TITRE EFFET JS

$('.titreJS').each(function () {
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({
        loop: true
    })
    .add({
        targets: '.titreJS .letter',
        scale: [4, 1],
        opacity: [0, 1],
        translateZ: 0,
        easing: "easeOutExpo",
        duration: 950,
        delay: function (el, i) {
            return 70 * i;
        }
    }).add({
        targets: '.titreJS',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });
