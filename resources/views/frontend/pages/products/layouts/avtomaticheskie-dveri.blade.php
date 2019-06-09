@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижные',
        'img_src'=>'img/products/avtomaticheskie-dveri/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Обе створки таких дверей раздвигаются и сдвигаются автоматически при приближении человека. Расчитаны на интенсивынй режим эксплуатации.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Вращающиеся',
        'img_src'=>'img/products/avtomaticheskie-dveri/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Также именуются как револьверные или двери карусельного типа. Несколько сетклянных лопастей вращаются вокруг центральной оси и способны контролировать проходящий поток посетителей.</p>
        @endslot

    @endcomponent

@endsection

@section('other-pages')

    @component('frontend.sections.other-pages', [
        'pages'=>[
            'Алюминиевые конструкции',
            'Раздвижные окна и двери',
            'Офисные перегородки',
        ]
    ])
    @endcomponent

@endsection