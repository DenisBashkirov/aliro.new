@extends('frontend.templates.main')

@section('main_content')

    <div class="elem-dealing elem-dealing_massive">

        <div class="container">

            <div class="elem-dealing elem-dealing_massive">

                <div class="sm-section-full-width">
                    <div class="swiper-container js-swiper" data-swiper-destroy="md">
                        <div class="md-grid-cols-2 swiper-wrapper">
                            <div class="swiper-slide border-radius">
                                <div class="swiper-slide elem-dealing elem-dealing_mini">
                                    <h3 class="h3_tiny font-weight_semibold">Цех ПВХ изделий</h3>
                                    <div class="img-container border-radius">
                                        <img src="{{ asset('img/production/tseh-metalloplastikovyh-izdeliy.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide border-radius">
                                <div class="swiper-slide elem-dealing elem-dealing_mini">
                                    <h3 class="h3_tiny font-weight_semibold">Цех алюминиевых изделий</h3>
                                    <div class="img-container border-radius">
                                        <img src="{{ asset('img/production/tseh-alyuminievyh-izdeliy.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar hidden_md"></div>
                    </div>
                </div>

                <div class="sm-section-full-width">
                    <div class="swiper-container js-swiper" data-swiper-destroy="md">

                        <div class="md-grid-cols-2 swiper-wrapper">

                            <div class="rubrics-about__card swiper-slide">
                                <div class="rubrics-about__card-cover">
                                    <img src="{{ asset('img/sections/rubrics-about/production.jpg') }}" alt="Работа с дилерами">
                                </div>
                                <div class="rubrics-about__card-content">
                                    <h3 class="rubrics-about__card-title h2_mini font-weight_extrabold">Работа с дилерами</h3>
                                    <div class="rubric-about__link">
                                        <a href="#" class="link link_arrowed hidden">
                                            <span>О работе с дилерами</span>
                                            <span class="icon-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="rubrics-about__card swiper-slide">
                                <div class="rubrics-about__card-cover">
                                    <img src="{{ asset('img/sections/rubrics-about/salon-okon.jpg') }}" alt="Салон окон Алиро">
                                </div>
                                <div class="rubrics-about__card-content">
                                    <h3 class="rubrics-about__card-title h2_mini font-weight_extrabold">Фирменный салон</h3>
                                    <div class="rubric-about__link">
                                        <a href="{{ route('company', 'salon-okon') }}" class="link link_arrowed">
                                            <span>О салоне окон</span>
                                            <span class="icon-arrow"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-scrollbar hidden_md"></div>

                    </div>
                </div>

                <div class="elem-dealing elem-dealing_tiny">

                    <div class="align-center">
                        <h2 class="h2_small font-weight_extrabold">Наш адрес</h2>
                    </div>

                    <div class="contacts-division__body elem-dealing elem-dealing_tiny">

                        <div class="contacts-division__contact-details font-weight_medium">

                            <div class="contacts-division__address text-iconed">
                                <span class="icon-location text_red"></span>
                                <span>п. Яблоновский, Шапсугское шоссе, 3/15</span>
                            </div>

                        </div>

                        <div id="ymap_production" class="contacts-division__map ymap"></div>

                    </div>

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
    @include('frontend.sources.ymaps.production')
@endsection