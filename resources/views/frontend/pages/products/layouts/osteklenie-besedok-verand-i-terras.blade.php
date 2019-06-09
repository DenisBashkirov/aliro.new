@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Панорамное остекление беседок, веранд и террас',
        'img_src'=>'img/products/' . $page->slug . '/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Способствует максимальной освещенности внутри помещения и даёт охватывающий вид изнутри. Может выполняться как из более доступных металлопластиковых, так и из алюминиевых конструкций.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижное остекление беседок, веранд и террас',
        'img_src'=>'img/products/' . $page->slug . '/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Раздвижные окна или двери призваны сэкономить пространство в небольших помещениях. В зависимости от требований к удерживанию тепла внутри помещения может быть изготовлено из металлопластиковых или из алюминивых окон и дверей.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Холодное остекление беседок, веранд и террас',
        'img_src'=>'img/products/' . $page->slug . '/3.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Остекление с применением раздвижных систем холодного типа. Актуально для строений и помещений, у которых нет необходимости иметь изоляцию от холодного воздуха снаружи. В первую очередь подходит для летних беседок, веранд или террас.</p>
            <p>Холодное остекление производится из профилей, которые не имеют в своей конструкции тепрмоизоляционные характеристики для уменьешения их стоимости.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Тёплое остекление беседок, веранд и террас',
        'img_src'=>'img/products/' . $page->slug . '/4.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Тёплый тип остекления подходит для тех строений и помещений, которым необходима высокая теплоизоляций для эксплуатации их в любое время года. Теплоизоляционные характеристики помогают удерживать тепло внутри помещения и пользоваться им даже вне летнего сезона.</p>
            <p>Тёплое остекление доступно как для поворотно-откидных систем, так и для раздвижных.</p>
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