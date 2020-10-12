$('.carrinho-aberto').on('click', function () {
    ctrl.toggleCarrinho();
});

var ctrl = {
    toggleCarrinho: function () {
        $('main').toggleClass('carrinho-aberto');
    }
}

$('main.carrinho-aberto').on('click', function () {
    ctrl.toggleCarrinho();
});

$(document).on('scroll', function () {
    $('.header-info').toggleClass('d-none', $(document).scrollTop() >= 150);
});

$(".toggle-menu").click(function () {
    $('.mobile-nav').toggleClass('aberto');
});

window.sr = ScrollReveal();
sr.reveal('.scroll-effect, .header, .box-servico, .box-icone', {duration: 1000});

$('.owl-carousel').owlCarousel({
    loop: true,
    items: 1,
    nav: false,
});