@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Панорамное остекление бассейнов',
        'img_src'=>'img/products/' . $page->slug . '/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Вариант остекления, при котором светопрозрачная часть стен полностью или почти от пола идёт до самого потолка. Таким образом изнутри помещения создаётся вид с широким охватом.</p>
            <p>В звисимости от площади светопрозрачной конструкции делается либо из металлоплатика, либо из алюминия.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижное остекление бассейнов',
        'img_src'=>'img/products/' . $page->slug . '/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Для бассейнов доступны несколько вариантов остекления дверных проёмов: ПСК-порталы или обычные раздвижки.</p>
            <p>Среди металлопластиковых систем доступны как ПСК-порталы, так и раздвижки. Из алюминиевых систем подходит обычная сдвижная конструкция.</p>
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