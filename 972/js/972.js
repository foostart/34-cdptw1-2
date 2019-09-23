window.addEventListener ('.swiper-button-next', function (event) { event.preventDefault (); }, {passive: false});
window.addEventListener ('.swiper-button-prev', function (event) { event.preventDefault (); }, {passive: false});

var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    zoom: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});



