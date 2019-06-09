@extends('frontend.templates.main')

@section('template_content')

    <div class="content_main">
        @include('frontend.pages.home.main_products')
        @include('frontend.pages.home.rubrics_about')
    </div>
    <div class="content_extra">
        @include('frontend.sections.free-measuring-form')
        @include('frontend.sections.portfolio-recap')
    </div>

@endsection