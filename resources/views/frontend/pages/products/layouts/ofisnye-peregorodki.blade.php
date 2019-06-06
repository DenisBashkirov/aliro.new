@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Стандартные перегородки',
        'img_src'=>'img/products/ofisnye-peregorodki/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')

        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Безрамные перегородки',
        'img_src'=>'img/products/ofisnye-peregorodki/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')

        @endslot

    @endcomponent

@endsection

@section('other-pages')

    @component('frontend.sections.other-pages', [
        'pages'=>[
            'Алюминиевые конструкции',
            'Алюминиевые окна',
            'Алюминиевые двери',
        ]
    ])
    @endcomponent

@endsection