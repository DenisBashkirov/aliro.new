@extends('frontend.templates.document')

@section('document_content')

    <div class="body-wrapper">

        <div class="main-content elem-dealing elem-dealing_massive">
            @component('frontend.sections.title-screen', ['page'=>$page, 'title_screen_size'=>$title_screen_size]) @endcomponent
            @yield('template_content')
            @include('frontend.sections.footer')
        </div>

    </div>

@endsection