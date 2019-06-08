@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Ламинированные окна и двери',
        'img_src'=>'img/products/' . $page->slug . '/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Процесс ламинации ПВХ профиля означает наклеивание на него специальной цветной плёнки. Такая операция проводится на оборудования при воздействии высоких температур.</p>
            <p>Ассортимент ламинирующих плёнок весьма широк. Их цвета могут быть однотонными или же с имитацией текстуры дерева.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Окрашенные окна и двери',
        'img_src'=>'img/products/' . $page->slug . '/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Любой ПВХ и алюминиевый профиль может быть окрашен в любой однотонный цвет RAL. Выбор насчитывает десятки вариантов цветов и оттенков.</p>
            <p>Помимо цветов RAL алюминиевые профиль может быть окрашен под текстуру дерева.</p>
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