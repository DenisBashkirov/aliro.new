

@extends('frontend.templates.main')

@section('main_content')

    <section>
        <div class="container">

            <h2 class="h2 h2_small align-center">Системы премиум класса</h2>

            <div class="profile-preview-card">

                <div class="profile-preview-card__head">
                    <h3 class="profile-preview-card__title product-title font-weight_bold">Brilliant Design</h3>
                </div>

                <div class="profile-preview-card__img">
                    <img src="{{ asset('img/products/pvc-placeholder.png') }}">
                </div>

                <div class="profile-preview-card__body">

                    <div class="profile-preview-card__properties">
                        <div class="profile-preview-card__properties-swiper swiper-container">

                            <div class="profile-preview-card__properties-list swiper-wrapper">

                                <div class="profile-preview-card__property-item swiper-slide">
                                    <div class="profile-preview-card__property-head h2_large font-weight_semibold">
                                        <span class="profile-preview-card__property-head-figure">70</span>
                                        <span class="profile-preview-card__property-head-unit">мм</span>
                                    </div>
                                    <div class="profile-preview-card__property-name text_secondary-1">ширина профиля</div>
                                </div>

                                <div class="profile-preview-card__property-item swiper-slide">
                                    <div class="profile-preview-card__property-head h2_large font-weight_semibold">
                                        <span class="profile-preview-card__property-head-figure">5</span>
                                        <span class="profile-preview-card__property-head-unit">x</span>
                                    </div>
                                    <div class="profile-preview-card__property-name text_secondary-1">число камер</div>
                                </div>

                                <div class="profile-preview-card__property-item swiper-slide grid-cols-span-md-2 justify-self-center">
                                    <div class="h2_small font-weight_medium">0,85м²°С/Вт</div>
                                    <div class="progress-bar">
                                        <div class="progress-bar__container">
                                            <div class="progress-bar__filling" style="width: 85%;"></div>
                                        </div>
                                    </div>
                                    <div class="profile-preview-card__property-name text_secondary-1">теплоизоляция</div>
                                </div>

                            </div>

                            <!--<div class="profile-preview-card__properties-scrollbar swiper-scrollbar_small swiper-scrollbar"></div>-->

                        </div>
                    </div>

                    <p class="profile-preview-card__utp font-weight_bold">Уникальный дизайн профиля</p>

                    <div class="justify-content-center">
                        <button type="button" class="button button_primary button_small">расчитать стоимость</button>
                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection