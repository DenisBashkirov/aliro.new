<section class="product-section product-section_default section section-margin_large">
    <div class="product-section__container container">
        <div class="product-section__wrapper {{ isset($wrapper_inverse) && $wrapper_inverse ? 'product-section__wrapper_inverse' : '' }}">

            <div class="product-section__content">

                <div class="product-section__heading">
                    <h3 class="h3 h3_small font-weight_bold product-title">{{ $title }}</h3>
                </div>

                @if(isset($text))
                    <div class="product-section__text text-container js-hyphen">
                        {{ $text }}
                    </div>
                @endif

                <div class="product-section__specifics product-section__specifics-swiper swiper-container">
                    <div class="product-section__specifics-swiper-wrapper swiper-wrapper">
                        <div class="product-section__specific-item swiper-slide">
                            <p class="product-section__specific-title">Профиль</p>
                            <p class="product-section__specific-value">Rehau Euro Slide</p>
                        </div>
                        <div class="product-section__specific-item swiper-slide">
                            <p class="product-section__specific-title">Теплоизоляция</p>
                            <p class="product-section__specific-value">Система тёплого остекления</p>
                        </div>
                        <div class="product-section__specific-item swiper-slide">
                            <p class="product-section__specific-title">Тип открывания</p>
                            <p class="product-section__specific-value">Параллельно-сдвижное</p>
                        </div>
                        <div class="product-section__specific-item swiper-slide">
                            <p class="product-section__specific-title">Цветной профиль</p>
                            <p class="product-section__specific-value">Ламинация или покраска RAL</p>
                        </div>
                    </div>
                    <div class="swiper-scrollbar hidden_md"></div>
                </div>

                <div class="product-section__action justify-content-center">
                    <button class="button button_medium button_primary">получить расчёт</button>
                </div>

            </div>

            <div class="product-section__cover">
                <img src="{{ asset($img_src) }}" alt="{{ $img_alt }}">
            </div>

        </div>
    </div>
</section>