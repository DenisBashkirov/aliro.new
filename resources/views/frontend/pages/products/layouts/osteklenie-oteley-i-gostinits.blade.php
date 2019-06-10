@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Панорамное остекление отелей и гостиниц',
        'img_src'=>'img/products/' . $page->slug . '/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>При панорамном остеклении гостиниц или отелей могут быть использованы либо металлопластиковые, либо алюминиевые системы. Это зависит от площади и типа остекления.</p>
            <p>Для светопрозрачных конструкций больших площадей используется алюминиевый профиль, способный устоять перед сильными ветровыми нагрузками. Металлопластиковые конструкции используются при более ограниченном бюджете и небольших в сравнении с алюминиевыми конструкциями размерах.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижное остекление отелей и гостиниц',
        'img_src'=>'img/products/' . $page->slug . '/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Для выходов на балконы или террасы можно использовать сдвижные конструкции алюминиевого или металлопластикового типа. Также из металлопластиковых систем можно выбрать подёъмно-сдвижные ПСК-порталы</p>
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