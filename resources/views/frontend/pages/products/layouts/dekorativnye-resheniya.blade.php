@extends('frontend.pages.products')

@section('products_content')




@endsection

@section('other-pages')

    @component('frontend.sections.other-pages', [
        'pages'=>[
            'Цветные окна и двери',
            'Раздвижные окна и двери',
            'Офисные перегородки',
        ]
    ])
    @endcomponent

@endsection