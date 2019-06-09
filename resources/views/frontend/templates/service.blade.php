@extends('frontend.templates.document')

@section('document_content')

    <div class="body-wrapper">

        <div class="main-content elem-dealing elem-dealing_massive">
            @yield('template_content')
            @include('frontend.sections.footer')
        </div>

    </div>

@endsection