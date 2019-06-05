@extends('frontend.templates.main')

@section('main_content')

    @yield('products_content')

    @include('frontend.sections.free-measuring-form')
    @include('frontend.sections.portfolio-recap')

@endsection