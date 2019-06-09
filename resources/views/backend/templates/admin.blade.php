@extends('backend.templates.document')

@section('main_content')

    @include('backend.sections.menu')

    <div class="body-wrapper">
        @yield('page_content')
    </div>

@endsection