@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Стандартные перегородки',
        'img_src'=>'img/products/ofisnye-peregorodki/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Имеют внешне заметные несущие конструкции в виде рамы или стойки.</p>
            <p>Могут быть выполнены из более доступных металлопластиковых профилей или более жёстких алюминиевых систем.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Цельностеклянные перегородки',
        'img_src'=>'img/products/ofisnye-peregorodki/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Не имеют в своей конструкции несущих рам или стоек. Сама конструкция держится на специальных зажимных профилях, которые предназначены для удерживания закалённого стекла.</p>
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