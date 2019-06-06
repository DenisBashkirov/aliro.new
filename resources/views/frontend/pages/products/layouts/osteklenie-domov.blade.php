@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Панорамное остекление домов',
        'img_src'=>'img/products/osteklenie-domov/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Используется для создания панорамного вида изнутри дома, а самому дому придают яркий облик снаружи.</p>
            <p>Такие конструкции могут иметь высоту в несколько этажей для создания единого светопрозрачного оформления фасада здания.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижное остекление домов',
        'img_src'=>'img/products/osteklenie-domov/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Раздвижные конструкции часто применяются для выходов на задний двор, остекления беседок, веранд и террасс.</p>
            <p>Раздвижки тёплого типа можно применять для даже для помещений, требующий теплоизоляцию. К таким раздвижкам относятся подъёмно-сдвижные конструкции, алюминиевые сдвижные и складные системы.</p>
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