<div class="elem-dealing elem-dealing_medium">

    <h2 class="h2_medium font-weight_extrabold">Другие разделы</h2>

    <div class="sm-section-full-width">
        <div class="swiper-container js-swiper" data-swiper-destroy="xl">

            <div class="xl-grid-cols-3 swiper-wrapper">

                @component('frontend.components.other-pages-card', [
                    'page'=>\App\Page::where('name', 'Пластиковые окна')->first()
                ])
                @endcomponent

                @component('frontend.components.other-pages-card', [
                    'page'=>\App\Page::where('name', 'Алюминиевые окна')->first()
                ])
                @endcomponent

                @component('frontend.components.other-pages-card', [
                    'page'=>\App\Page::where('name', 'Раздвижные окна и двери')->first()
                ])
                @endcomponent

            </div>

            <div class="swiper-scrollbar hidden_xl"></div>

        </div>

    </div>

</div>