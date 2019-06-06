<div class="other-pages-card border-radius swiper-slide">

    <div class="other-pages-card__head">
        <div class="other-pages-card__cover img-container">
            <img src="{{ asset('img/sections/title-screen/' . $page->slug . '.jpg') }}" alt="">
        </div>
    </div>

    <div class="other-pages-card__body">

        <div class="other-pages-card__title">
            <p class="h3_mini font-weight_bold line-height-reset">{{ $page->name }}</p>
        </div>

        <div class="other-pages-card__link">
            <a href="{{ $page->urn }}" class="link link_arrowed link_large">
                <span>перейти</span>
                <span class="icon-arrow"></span>
            </a>
        </div>

    </div>

</div>