@extends('frontend.templates.main')

@section('main_content')

    <div class="container">

        .

        <div class="contacts-division__body">

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

    @include('frontend.sections.free-measuring-form')
    @include('frontend.sections.portfolio-recap')

@endsection

@section('page_head')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=8da8c2ec-adac-4e3c-9c9e-3e08b5d29ef3&lang=ru_RU" type="text/javascript"></script>
@endsection

@section('page_scripts')
    @include('frontend.sources.ymaps.retail')
@endsection