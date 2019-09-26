$(document).ready(function () {
    $(".menu").click(function () {
        $(".navmenu-mobile").toggleClass('in');
        $(".navmenu-mobile").css('width','100%');
    });

    $(".close").click(function () {
        $(".navmenu-mobile").toggleClass('out');
        $(".navmenu-mobile").css('width','0%');
    });
});