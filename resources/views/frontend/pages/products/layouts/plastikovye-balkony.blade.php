@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Поворотно-откидные',
        'img_src'=>'img/products/plastikovye-balkony/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Поворотно-откидные окна имеют два варианта открывания: стандартное открывание (поворотное) и проветривание (откидное).</p>
            <p>Балконы такого типа всегда имеют достаточную теплоизоляцию, чтобы сделать балкон тёплым помещением даже зимой. Доступнен вариант панорамного остекления балкона от пола до потолка.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижные',
        'img_src'=>'img/products/plastikovye-balkony/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Раздвижные пластиковые балконы делятся на две категории по теплоизоляции: тёплого и холодного типа.</p>
            <p>Балконы тёплого типа имеют плотное закрывание и не пропускают воздух внутрь помещения. Для этого используются подъёмно-сдвижные конструкции.</p>
            <p>Балконы холодного типа могут пропускать воздух с улицы, так как места сведения створки с рамой имеют не полное прилегание. Такие балконы изготавливаются из конструкций сдвижного типа.</p>
        @endslot

    @endcomponent

@endsection

@section('other-pages')

    @component('frontend.sections.other-pages', [
        'pages'=>[
            'Алюминиевые балконы',
            'Пластиковые окна',
            'Раздвижные окна и двери',
        ]
    ])
    @endcomponent

@endsection