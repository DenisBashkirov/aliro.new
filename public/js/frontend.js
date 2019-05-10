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


    /*
    Перенос строк
     */
    $('.js-hyphen').hyphenate();


    /*
    SWIPER - ARTICLES-PREVIEW-SECTION
     */
    if (viewportSmallerXl)
    {
        var articlesPreviewSectionSwiper = new Swiper ('.articles-preview-section__swiper', {
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

    /*
    SWIPER - PROFILE-PREVIEW-PROPERTIES
     */
    if (viewportSmallerMd)
    {
        var profilePreviewPropertiesListSwiper = new Swiper ('.profile-preview-card__properties-swiper', {
            loop: false,
            slidesPerView: 'auto',
            spaceBetween: 20,
            slidesOffsetBefore: 15,
            slidesOffsetAfter: 15,
            slideClass: 'profile-preview-card__property-item',
            breakpointsInverse: true,
            centeredSlides: true,
            initialSlide: 1,
            scrollbar: {
                el: '.swiper-scrollbar',
                hide: false,
            },
            breakpoints: {
                768: {
                    spaceBetween: 30,
                }
            }
        })
    }

});