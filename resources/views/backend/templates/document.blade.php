<!doctype html>
<html>
<head>

    <link rel="icon" href="{{ asset('favicons/icon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{ asset('favicons/icon-32x32.png') }}" sizes="32x32" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aliro</title>

    @include('backend.sources.styles')

</head>
<body>

@yield('main_content')

@include('backend.sources.scripts')

</body>
</html>