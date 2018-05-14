$('.hero-button').click(function (e) {
    $('.logreg_pop').fadeIn(500)
})

$('.close').click(function (e) {
    $('.logreg_pop').fadeOut(500)
    $('.login').fadeOut(500)
    $('.register').fadeOut(500)
})

$('.login_btn').click(function (e) {
    $('.login').fadeIn(500)
    $('.logreg_pop').fadeOut(200)
    $('#menuToggle input').trigger('click')

})

$('.register_btn').click(function (e) {
    $('.register').fadeIn(500)
    $('.logreg_pop').fadeOut(500)
    $('.login').fadeOut(500)
    $('#menuToggle input').trigger('click')

})

window.addEventListener("scroll", function () {
    if (window.pageYOffset >= $("form.search").offset().top) {
        document.querySelector(".homenavbar h1").classList.add("hide");
        document.querySelector(".nav_search.home").classList.remove("home")

    } else {
        document.querySelector(".homenavbar h1").classList.remove("hide");
        document.querySelector(".nav_search").classList.add("home")

    }
});
