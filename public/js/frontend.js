$(document).ready(function () {

    var viewportBiggerXl = false;
    var viewportBiggerLg = false;
    var viewportBiggerMd = false;
    var viewportBiggerSm = false;

    var viewportSmallerXl = false;
    var viewportSmallerLg = false;
    var viewportSmallerMd = false;
    var viewportSmallerSm = false;

    var xl = '1200';
    var lg = '992';
    var md = '768';
    var sm = '600';

    var viewportWidth = $(window).width()

    if (viewportWidth >= 1200)
        viewportBiggerXl = true;

    if (viewportWidth >= 992)
        viewportBiggerLg = true;

    if (viewportWidth >= 768)
        viewportBiggerMd = true;

    if (viewportWidth >= 600)
        viewportBiggerSm = true;


    if (viewportWidth < 1200)
        viewportSmallerXl = true;

    if (viewportWidth < 992)
        viewportSmallerLg = true;

    if (viewportWidth < 768)
        viewportSmallerMd = true;

    if (viewportWidth < 600)
        viewportSmallerSm = true;



    $('.js-hyphen').hyphenate();


    if (viewportSmallerXl)
    {
        var mySwiper = new Swiper ('.articles-preview-section__swiper', {
            loop: false,
            slidesPerView: 'auto',
            spaceBetween: 20,
            slidesOffsetBefore: 15,
            slidesOffsetAfter: 15,
            slideClass: 'article-preview-card',
            breakpointsInverse: true,
            breakpoints: {
                768: {
                    spaceBetween: 30,
                }
            }
        })
    }

});