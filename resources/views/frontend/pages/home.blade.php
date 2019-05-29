@extends('frontend.templates.main')

@section('main_content')

    @include('frontend.pages.home.main_products')
    @include('frontend.pages.home.rubrics_about')
    @include('frontend.sections.free-measuring-form')
    @include('frontend.sections.portfolio-recap')

@endsection