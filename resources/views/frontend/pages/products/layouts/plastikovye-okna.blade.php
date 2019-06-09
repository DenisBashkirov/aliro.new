@extends('frontend.pages.products')

@section('products_content')

    <div class="container">

        <div class="elem-dealing elem-dealing_massive">

            @foreach($pvc_profile_categories as $pvc_category)
                @component('frontend.pages.products.products-category', [
                    'title'=>$pvc_category->name
                ])

                    @slot('products')
                        <div class="elem-dealing elem-dealing_massive">
                            @foreach($pvc_category->profiles as $profile)
                                <section class="section">

                                    <div class="profile-preview-card">

                                        <div class="profile-preview-card__head">
                                            <h3 class="profile-preview-card__title product-title font-weight_bold">{{ $profile->name }}</h3>
                                        </div>

                                        <div class="profile-preview-card__img">
                                            <img src="{{ asset('img/products/plastikovye-okna/' . $profile->name . '.png') }}">
                                        </div>

                                        <div class="profile-preview-card__body">

                                            <div class="profile-preview-card__properties">
                                                <div class="profile-preview-card__properties-swiper swiper-container">

                                                    <div class="profile-preview-card__properties-list swiper-wrapper">

                                                        <div class="profile-preview-card__property-item swiper-slide">
                                                            <div class="profile-preview-card__property-head h2_large font-weight_semibold">
                                                                <span class="profile-preview-card__property-head-figure">{{ $profile->width }}</span>
                                                                <span class="profile-preview-card__property-head-unit">мм</span>
                                                            </div>
                                                            <div class="profile-preview-card__property-name text_secondary-1">ширина профиля</div>
                                                        </div>

                                                        <div class="profile-preview-card__property-item swiper-slide">
                                                            <div class="profile-preview-card__property-head h2_large font-weight_semibold">
                                                                <span class="profile-preview-card__property-head-figure">{{ $profile->cameras }}</span>
                                                                <span class="profile-preview-card__property-head-unit">x</span>
                                                            </div>
                                                            <div class="profile-preview-card__property-name text_secondary-1">число камер</div>
                                                        </div>

                                                        <div class="profile-preview-card__property-item swiper-slide grid-cols-span-md-2 justify-self-center">
                                                            <div class="h2_small font-weight_medium">{{ $profile->thermistance }}²°С/Вт</div>
                                                            <div class="progress-bar">
                                                                <div class="progress-bar__container">
                                                                    <div class="progress-bar__filling" style="width: {{ ($profile->thermistance - 0.5) * 200 }}%;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="profile-preview-card__property-name text_secondary-1">теплоизоляция</div>
                                                        </div>

                                                    </div>

                                                    <!--<div class="profile-preview-card__properties-scrollbar swiper-scrollbar_small swiper-scrollbar"></div>-->

                                                </div>
                                            </div>

                                            <p class="profile-preview-card__utp font-weight_bold">{{ $profile->utp }}</p>

                                            <div class="justify-content-center hidden">
                                                <button type="button" class="button button_primary button_small">расчитать стоимость</button>
                                            </div>

                                        </div>

                                    </div>

                                </section>
                            @endforeach
                        </div>
                    @endslot

                @endcomponent
            @endforeach

        </div>

    </div>

@endsection

@section('other-pages')

    @component('frontend.sections.other-pages', [
        'pages'=>[
            'Пластиковые двери',
            'Пластиковые окна',
            'Раздвижные окна и двери'
        ]
    ])
    @endcomponent

@endsection