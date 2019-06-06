@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Распашные',
        'img_src'=>'img/products/alyuminievye-dveri/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Стандартный формат алюминиевых дверных конструкций. Имеет повортный тип открывания. Двери с таким открываением могут быть с одной или двумя створками.</p>
            <p>Нередко в качестве дополнительной комплектации устанавливается доводчик для плавного и бесшумного закрывания двери. Петли могут быть стандартного и скрытого типа.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижные',
        'img_src'=>'img/products/alyuminievye-dveri/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Эргономичный вариант открывания дверных конструкций. Можно выбирать между сдвижными или складными конструкциями.</p>
            <p>Все профильные системы алюминиевых раздвижных дверей обеспечивают плотное закрывание, достаточное для того, чтобы их можно было устанавливать при выходе из жилого помещения на улицу. Поэтому они отлично подходят для остекления беседок, веранд, террас и открытых балконов.</p>
        @endslot

    @endcomponent

@endsection

@section('other-pages')

    @component('frontend.sections.other-pages', [
        'pages'=>[
            'Автоматические двери',
            'Алюминиевые окна',
            'Раздвижные окна и двери',
        ]
    ])
    @endcomponent

@endsection