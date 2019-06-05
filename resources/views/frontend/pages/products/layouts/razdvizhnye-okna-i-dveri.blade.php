@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Сдвижные',
        'img_src'=>'img/products/razdvizhnye-okna/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Две или более створки располагаются на параллельных направляющих. Любая секция конструкции может быть открыта на всю ширину створки путём её смещения вбок.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Подъёмно-сдвижные',
        'img_src'=>'img/products/razdvizhnye-okna/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Конструкция состоит двух секций: створочная (открывающиаяся) и глухая (неподвижная). При открывании створка слегка смещается внутрь помещения, после чего может быть отодвинута на полное открываение.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Складные',
        'img_src'=>'img/products/razdvizhnye-okna/3.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Также данный тип конструкции известен как “гармошка”. При октрывании каждая створочная секция складывается к другой секции.</p>
        @endslot

    @endcomponent

@endsection