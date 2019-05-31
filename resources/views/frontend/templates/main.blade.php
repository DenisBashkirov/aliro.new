<!doctype html>
<html>
<head>

    <link rel="icon" href="{{ asset('favicons/icon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{ asset('favicons/icon-32x32.png') }}" sizes="32x32" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $page->meta_description }}">
    <title>{{ $page->title }}</title>

    @include('frontend.sources.styles')

</head>
<body>


@include('frontend.sections.header_test')
<div class="body-wrapper">
    @component('frontend.sections.title-screen', ['page'=>$page, 'title_screen_size'=>$title_screen_size]) @endcomponent
    @yield('main_content')
</div>

@include('frontend.sections.footer')


@include('frontend.sources.scripts')

</body>
</html>