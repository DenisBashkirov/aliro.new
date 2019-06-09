@extends('frontend.templates.main')

@section('template_content')

    <div class="elem-dealing elem-dealing_massive">
        @yield('products_content')
    </div>

    <div class="elem-dealing elem-dealing_massive">

        <div class="container">
            @yield('other-pages')
        </div>

        @include('frontend.sections.free-measuring-form')
        @include('frontend.sections.portfolio-recap')

    </div>

@endsection