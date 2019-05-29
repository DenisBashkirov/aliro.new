@extends('backend.templates.main')

@section('main_content')

    @include('backend.sections.menu')

    <div class="body-wrapper">
        @yield('page_content')
    </div>

@endsection