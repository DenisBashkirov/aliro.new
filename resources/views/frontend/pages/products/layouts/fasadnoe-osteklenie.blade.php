@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Классические стоечно-ригельные фасады',
        'img_src'=>'img/products/' . $page->slug . '/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>В основе системы лежит конструкции из вертикальных несущих стоек, между которыми прокладываются горизонтальные балки, называемые ригелем. Именно поэтому данный вид фасадов называется стоечно-ригельным.</p>
            <p>При необходимости в стоечно-ригельный фасад можно встраивать любые типы окон и дверей. В том числе и окна со скрытыми створками. Скрытые створки не видны с учичной стороны, а фасад визуально выглядит цельным.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Структурные фасады',
        'img_src'=>'img/products/' . $page->slug . '/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Структурный тип фасадов значительно отличается от сточно-ригельных как конструктивно, так и визуально. Несущую функцию в данной конструкции имеют стеклопакеты, которые крепятся с помощью клея-герметика. Это помогает сделать конструкционные швы между сетклопакетами визуально гораздо меньше, буквально в несколько сантмиетров.</p>
            <p>Таким образом фасад здания выглядит со стороны улицы болеее целостным, без явных несущих перегородок.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Полуструктурные фасады',
        'img_src'=>'img/products/' . $page->slug . '/3.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Является своего рода средним вариантом между сточно-ригельным и структурным фасадами. Визуально со стороны улицы имеет лишь вертикальные или горизонтальные перекладины, тогда как ряд в другом направлении имеет лишь небольшие герметичные швы.</p>
            <p>Внешние перекладины скрываются под декоративными крышками. В результате облик здания имеет более сплошное остекление, чем при классической системе со стойками и ригелями.</p>
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