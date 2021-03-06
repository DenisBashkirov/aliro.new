$(document).ready(function () {

    var viewpoerSm;
    var viewportMd;
    var viewportLg;
    var viewportXl;

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

    if (viewportWidth < md)
        viewpoerSm = true;

    if (viewportWidth >= md && viewportWidth < lg)
        viewportMd = true;

    if (viewportWidth >= lg && viewportWidth < xl)
        viewportXl = true;

    if (viewportWidth >= xl)
        viewportLg = true;

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
    SWIPER - PORTFOLIO-RECAP
     */
    if (viewportSmallerXl)
    {
        var portfolioRecapSwiper = new Swiper ('.portfolio-recap__swiper-container', {
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
    SWIPER - product-section__specifics-swiper
     */
    if (viewportSmallerMd)
    {
        var productSectionSpecificsSwiper = new Swiper ('.product-section__specifics-swiper', {
            loop: false,
            slidesPerView: 1,
            breakpointsInverse: true,
            slidesPerColumn: 2,
            slideClass: 'product-section__specific-item',
            freeMode: false,
            freeModeMomentum: true,
            freeModeMomentumRatio: 0.5,
            freeModeMomentumVelocityRatio: 0.5,
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
    SWIPER - contacts-department__staff-swiper-container
    */
    var contactsDepartmentStaffSwiper = new Swiper ('.contacts-department__staff-swiper-container', {
        loop: false,
        slidesPerView: 'auto',
        breakpointsInverse: true,
        spaceBetween: 10,
        centeredSlides: true,
        centerInsufficientSlides: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false
        },
        breakpoints: {
            768: {

                centeredSlides: false,
                spaceBetween: 30
            }
        }
    });

    for (var i = 0; i < contactsDepartmentStaffSwiper.length; i++)
    {
        var swiper = contactsDepartmentStaffSwiper[i];
        var slides = swiper.slides;

        if (slides.length <= 4 && viewportXl)
        {
            swiper.destroy(false, false);
        }
        if (slides.length <= 3 && viewportLg)
        {
            swiper.destroy(false, false);
        }
        if (slides.length <= 2 && viewportMd)
        {
            swiper.destroy(false, false);
        }
    }


    /*
    SWIPER - contacts-department__staff-swiper-container
    */
    var swipers = new Swiper ('.js-swiper', {
        init: false,
        loop: false,
        slidesPerView: 'auto',
        breakpointsInverse: true,
        spaceBetween: 10,
        slidesOffsetBefore: 15,
        slidesOffsetAfter: 15,
        centerInsufficientSlides: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: false
        },
        breakpoints: {
            768: {
                slidesOffsetBefore: 0,
                slidesOffsetAfter: 0,
                centeredSlides: false,
                spaceBetween: 30
            }
        }
    });


    function swiperHandleBrpt(swipers) {

    }


    var amountOfSwipers;
    if(swipers.length)
        amountOfSwipers = swipers.length;
    else
        amountOfSwipers = 1;


    if (amountOfSwipers > 1)
    {
        for (var i=0; i < swipers.length; i++)
        {

            if (swipers[i].$el.attr('data-swiper-destroy'))
            {
                var swiperBrpt = swipers[i].$el.attr('data-swiper-destroy');

                if (!swiperBrpt)
                {
                    swipers[i].init();
                }

                if (viewportWidth < eval(swiperBrpt))
                {
                    swipers[i].init();
                    //swipers[i].$el.css('overflow', 'hidden');
                }
            }
            else
            {
                swipers[i].init();
                swipers[i].$el.css('overflow', 'hidden');
            }
        }
    }
    else
    {
        if(swipers.$el)
        {
            var swiperBrpt = swipers.$el.attr('data-swiper-destroy');

            console.log(swiperBrpt);

            if (viewportWidth < eval(swiperBrpt))
            {
                swipers.init();
                //swipers.$el.css('overflow', 'hidden');
            }
        }
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


    /*
    INPUT MASKS
     */
    var $inputPhone = $('.js-mask_phone');
    $inputPhone.mask("9(999)999-99-99");



    /*
    ПЛАВЫНЙ СКРОЛЛ
     */
    var header = document.querySelector('.header');
    var headerHeight = parseInt(getComputedStyle(header).height) - 1;

    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: ($(_href).offset().top - headerHeight)+"px"}, 1200, 'easeInOutQuart');
        return false;
    });


});