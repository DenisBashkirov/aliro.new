<div class="elem-dealing elem-dealing_medium">

    <h2 class="h2_medium font-weight_extrabold">Другие разделы</h2>

    <div class="sm-section-full-width">
        <div class="swiper-container js-swiper" data-swiper-destroy="xl">

            <div class="xl-grid-cols-3 swiper-wrapper">

                @foreach($pages as $page_name)

                    @component('frontend.components.other-pages-card', [
                    'page'=>\App\Page::where('name', $page_name)->first()
                ])
                @endcomponent

                @endforeach


            </div>

            <div class="swiper-scrollbar hidden_xl"></div>

        </div>

    </div>

</div>