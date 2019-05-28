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

    /*
    SWIPER - MAIN-PRODUCTS
     */
    if (viewportSmallerXl)
    {
        var mainProductsSwiper = new Swiper ('.main-products__swiper', {
            loop: false,
            slidesPerView: 'auto',
            spaceBetween: 10,
            slidesOffsetBefore: 15,
            slidesOffsetAfter: 15,
            slideClass: 'main-products__category-card',
            breakpointsInverse: true,
            scrollbar: {
                el: '.swiper-scrollbar',
                hide: false
            },
            breakpoints: {
                768: {
                    spaceBetween: 30
                }
            }
        })
    }

    /*
    SWIPER - MAIN-PRODUCTS
     */
    if (viewportSmallerXl)
    {
        var rubricsAboutSwiper = new Swiper ('.rubrics-about__swiper-container', {
            loop: false,
            slidesPerView: 'auto',
            spaceBetween: 10,
            slidesOffsetBefore: 15,
            slidesOffsetAfter: 15,
            breakpointsInverse: true,
            scrollbar: {
                el: '.swiper-scrollbar',
                hide: false
            },
            breakpoints: {
                768: {
                    spaceBetween: 30
                }
            }
        })
    }


    /*
    NAV DROPDOWNS
     */
    var $menuItems = $('.nav__item');

    // for sm devices
    if (viewportSmallerMd)
    {
        $menuItems.on('click', function (e) {
            var dropdown = $(this).find('.nav__dropdown');

            var target = $(e.target);
            if (!target.parents().hasClass('nav__dropdown'))
            {
                dropdown.addClass('nav__dropdown_visible');
            }

        });

    }

    // for md devices and bigger
    if (viewportBiggerSm)
    {
        $menuItems.on('mouseenter', function () {
            var dropdown = $(this).find('.nav__dropdown');

            dropdown.fadeIn(200);

        });

        $menuItems.on('mouseleave', function () {
            var dropdown = $(this).find('.nav__dropdown');
            dropdown.fadeOut(200);
        });
    }


    /*
    HAMBURGER-BUTTON
     */
    var $hamburger = $('.js-hamburger');
    var $nav = $('.header__menu');
    var $menuDropdowns = $('.nav__dropdown');

    $hamburger.on('click', function () {
        $(this).toggleClass('is-active');
        $nav.toggleClass('header__menu_visible');
        $menuDropdowns.removeClass('nav__dropdown_visible');
    });


    /*
    DROPDOWN HIDE BUTTON
     */
    var $backButton = $('.js-dropdown-hide');
    $backButton.on('click', function (e) {
        $dropdown = $(this).parents('.nav__dropdown');
        $dropdown.removeClass('nav__dropdown_visible');
    });


});