@extends('frontend.templates.main')

@section('main_content')

    <section class="articles-preview-section">
        <div class="articles-preview-section__container">

            <h2 class="h2 h2_medium">Статьи</h2>

            <div class="articles-preview-section__swiper swiper-container">
                <div class="articles-preview-section__items-grid swiper-wrapper">
                    @include('frontend.components.article-preview-card')
                    @include('frontend.components.article-preview-card')
                    @include('frontend.components.article-preview-card')
                </div>
            </div>

        </div>
    </section>

    @include('frontend.sections.form-measuring')

@endsection