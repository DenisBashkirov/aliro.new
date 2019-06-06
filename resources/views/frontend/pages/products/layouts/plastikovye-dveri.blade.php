@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Балконные и межкомнатные',
        'img_src'=>'img/products/plastikovye-dveri/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <div class="text-container">
                <p>Балконные и межкомнатные металлопластиковые двери чаще всего изготавливаются из того же профиля, что и окна. Благодаря этому достигается более низкая цена в сравнении с <a href="#{{ Str::slug('Входные') }}">входными дверями</a>. Однако, по этой же причине дверные конструкции из такого профиля имеют сильные ограничения по габаритам, так как фурнитура применяется тоже оконная, расчитанная на на работу с определёнными ограничениями по нагрузке.</p>
                <p>Помимо стандартного поворотного (распашного) типа открывания дополнительно возможно откидное открывание на проветривание.</p>
            </div>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Входные',
        'img_src'=>'img/products/plastikovye-dveri/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <div class="text-container">
                <p>Стандартные металлопластиковые двери предусматривают более тяжёлые виды профильных систем в сравнении с балконными и межкомнатными дверями. Дверной профиль имеет усиленную конструкцию, так как предназначен для больших нагрузок. Такие двери используют усиленную фурнитуру, расчитанную на множество цаиклов открывания в условиях высокой нагрузки.</p>
                <p>Такие двери незаменимы при остеклении входных проёмов зданий или офисов.</p>
            </div>
        @endslot

    @endcomponent

@endsection

@section('other-pages')

    @component('frontend.sections.other-pages', [
        'pages'=>[
            'Пластиковые окна',
            'Пластиковые балконы',
            'Раздвижные окна и двери'
        ]
    ])
    @endcomponent

@endsection