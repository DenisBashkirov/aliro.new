@extends('frontend.templates.main')

@section('main_content')

    <div class="elem-dealing elem-dealing_massive">

        <div class="container">

            <div class="elem-dealing elem-dealing_large">

                <div class="align-center">
                    <h2 class="h2_small font-weight_extrabold">Шоу-рум в Краснодаре</h2>
                    <p class="font-weight_regular">У нас представлены все виды основной продукции</p>
                </div>

                <div class="elem-dealing elem-dealing_mini">
                    <h3 class="h3_tiny font-weight_bold">Образцы ПВХ профилей</h3>

                    <div class="sm-section-full-width">
                        <div class="swiper-container js-swiper" data-swiper-destroy="xl">
                            <div class="xl-grid-cols-4 swiper-wrapper">
                                <div class="img-container swiper-slide border-radius">
                                    <div class="img-container swiper-slide border-radius">
                                        <img src="{{ asset('img/salon-okon/1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="img-container swiper-slide border-radius">
                                    <div class="img-container swiper-slide border-radius">
                                        <img src="{{ asset('img/salon-okon/2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="img-container swiper-slide border-radius">
                                    <div class="img-container swiper-slide border-radius">
                                        <img src="{{ asset('img/salon-okon/3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="img-container swiper-slide border-radius">
                                    <div class="img-container swiper-slide border-radius">
                                        <img src="{{ asset('img/salon-okon/4.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-scrollbar hidden_xl"></div>
                        </div>
                    </div>

                </div>

                <div class="elem-dealing elem-dealing_mini">
                    <h3 class="h3_tiny font-weight_bold">Образцы готовых распашных и раздвижных конструкций</h3>

                    <div class="sm-section-full-width">
                        <div class="swiper-container js-swiper" data-swiper-destroy="xl">
                            <div class="xl-grid-cols-4 swiper-wrapper">
                                <div class="img-container swiper-slide border-radius">
                                    <img src="{{ asset('img/salon-okon/5.jpg') }}" alt="">
                                </div>
                                <div class="img-container swiper-slide border-radius">
                                    <img src="{{ asset('img/salon-okon/6.jpg') }}" alt="">
                                </div>
                                <div class="img-container swiper-slide border-radius">
                                    <img src="{{ asset('img/salon-okon/7.jpg') }}" alt="">
                                </div>
                                <div class="img-container swiper-slide border-radius">
                                    <img src="{{ asset('img/salon-okon/8.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-scrollbar hidden_xl"></div>
                        </div>
                    </div>
                </div>

                <div class="elem-dealing elem-dealing_mini">
                    <h3 class="h3_tiny font-weight_bold">Образцы комплектующих</h3>

                    <div class="sm-section-full-width">
                        <div class="swiper-container js-swiper" data-swiper-destroy="xl">
                            <div class="xl-grid-cols-4 swiper-wrapper">
                                <div class="img-container swiper-slide border-radius">
                                    <img src="{{ asset('img/salon-okon/9.jpg') }}" alt="">
                                </div>
                                <div class="img-container swiper-slide border-radius">
                                    <img src="{{ asset('img/salon-okon/10.jpg') }}" alt="">
                                </div>
                                <div class="img-container swiper-slide border-radius">
                                    <img src="{{ asset('img/salon-okon/11.jpg') }}" alt="">
                                </div>
                                <div class="img-container swiper-slide border-radius">
                                    <img src="{{ asset('img/salon-okon/12.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-scrollbar hidden_xl"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="elem-dealing elem-dealing_tiny">

                <div class="align-center">
                    <h2 class="h2_small font-weight_extrabold">Наш адрес</h2>
                </div>

                <div class="contacts-division__body elem-dealing elem-dealing_tiny">

                    <div class="contacts-division__contact-details font-weight_medium">

                        <div class="contacts-division__address text-iconed">
                            <span class="icon-location text_red"></span>
                            <span>г. Краснодар, ул. Калинина, 258</span>
                        </div>

                        <a href="tel:+78612139292" class="contacts-division__address text-iconed link">
                            <span class="icon-phone text_red"></span>
                            <span>8 (861) 213-92-92</span>
                        </a>

                    </div>

                    <div id="ymap_retail" class="contacts-division__map ymap"></div>

                </div>

            </div>
        </div>

        @include('frontend.sections.free-measuring-form')
        @include('frontend.sections.portfolio-recap')

    </div>

@endsection

@section('page_head')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=8da8c2ec-adac-4e3c-9c9e-3e08b5d29ef3&lang=ru_RU" type="text/javascript"></script>
@endsection

@section('page_scripts')
    @include('frontend.sources.ymaps.retail')
@endsection