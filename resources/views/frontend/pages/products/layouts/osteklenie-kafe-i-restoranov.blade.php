@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Панорамное остекление кафе и ресторанов',
        'img_src'=>'img/products/' . $page->slug . '/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>В тех случаях, когда необходимо остеклить небольую площадь панорамного проёма, подойдёт вариант остекления металлопластиком.</p>
            <p>Если же площадь проёма для остекления имеет заметно большой размер, выбирать стоит алюминиевое остекление, которое доступно в нескольких вариантах: классический, структурный или полуструктурный.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижное остекление кафе и ресторанов',
        'img_src'=>'img/products/' . $page->slug . '/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Раздвижные конструкции весьма актуальны в условиях южного климата, когда есть необходимость на период летнего сезона иметь широкий открытый проём.</p>
            <p>Наиболее актуальными в данной области являются сдвижные металлопластиковые и алюминиевые, складные алюминиевые конструкции.</p>
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