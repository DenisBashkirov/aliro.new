@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Поворотно-откидные',
        'img_src'=>'img/products/alyuminievye-balkony/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Стандартный вариант остекления, при котором окна можно открывать как в сторону для полного открывания, так и откидывать на себя для проветривания. Всегда используется при необходимости сделать из балкона тёплое помещение, обладающиее теплоизоляцией от внешней среды.</p>
            <p>Характеристики алюминиевых систем также позволяют в полной мере использовать панорамное остекление балконов.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижные',
        'img_src'=>'img/products/alyuminievye-balkony/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Практичный вариант остекления балкона или лоджии. Практически любую часть проёма можно открыть во всю ширину створки. При этом это самый доступный вариант остекления.</p>
            <p>Однако, раздвижная алюминиевая система для остекления балконов является системой холодного типа. Это означает, что такой балкон будет помещением холодного типа, не обладающим теплоизоляционными от внешней среды характеристиками.</p>
        @endslot

    @endcomponent

@endsection

@section('other-pages')

    @component('frontend.sections.other-pages', [
        'pages'=>[
            'Пластиковые балконы',
            'Алюминиевые окна',
            'Раздвижные окна и двери',
        ]
    ])
    @endcomponent

@endsection