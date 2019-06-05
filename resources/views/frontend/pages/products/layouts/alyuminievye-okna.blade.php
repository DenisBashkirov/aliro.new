@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Распашные',
        'img_src'=>'img/products/alyuminievye-okna/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Поворотное открываение - традиционный тип исполнения открывания, при котором створочная часть окна открывается вовнутрь помещения с поворотом в сторону. </p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Поворотно-откидные',
        'img_src'=>'img/products/alyuminievye-okna/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>По мимом поворотного открывания такие окна можно откидывать немного на себя. В результате образуется небольшой проём для проветривания помещения. Поэтому часто такое открывание часто называют режимом проветривания.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Верхнеподвесные',
        'img_src'=>'img/products/alyuminievye-okna/3.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Окна с верхнеподвесными створками имеют горизонтальное расположение петель в верхней части проёма. Засчёт этого открываение окна происходит не в сторону, а на себя или от себя в зависимости от варианта открывания. Соответственно, верхнеподвесное открывание может быть как наружу, так и внутрь помещения</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Раздвижные',
        'img_src'=>'img/products/alyuminievye-okna/4.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Открывание происходит путём сдвига открывающейся части в сторону. Также возможно изготовление конструкций типа "гармошка", в которых открывание просиходит засчёт складывания створок друг к дургу.</p>
        @endslot

    @endcomponent

@endsection