@extends('frontend.pages.products')

@section('products_content')

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Холодные системы',
        'img_src'=>'img/products/alyuminievye-konstruktsii/1.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Алюминиевые профильные системы холодного типа предназначены для остекления помещений, не требущий сохранени тепла. Например, для балконов, лоджий и лестничных пролётов.</p>
            <p>Также используются для изготовления конструкций, устанавливаемых внутри здания. Например, перегородки, межкомнатные двери или окна, к которым не предъявляются требования по теплозащиет</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Тёплые системы',
        'img_src'=>'img/products/alyuminievye-konstruktsii/2.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>true
        ])

        @slot('text')
            <p>Системы тёплого типа имеют высокие термоизоляционные характеристики. Могут применяться для изготовления наружных светопрозрачных конструкций, к которым относятся входные двери, окна и балконы, фасадные системы зданий.</p>
            <p>Способоность удерживать тепло достигается применением специального элемента в конструкции профиля - терморазрыва. Именно он даёт конструкции температурную изоляцию от внещней среды.</p>
        @endslot

    @endcomponent

    @component('frontend.pages.products.product-section_default', [
        'title'=>'Крышно-купольная система',
        'img_src'=>'img/products/alyuminievye-konstruktsii/3.jpg',
        'img_alt'=>'',
        'wrapper_inverse'=>false
        ])

        @slot('text')
            <p>Крышно-купольная система предназначена для изготовления свето-прозрачных конструкций различной конфигурации: односкатных и двускатных крыш, куполов, арочных сводов, пирамид сложной конфигурации.</p>
            <p>Светопрозрачные кровли и зенитные фонари придают зданиям эффектный, неповторимый вид и в то же время обеспечивают защиту от неблагоприятных условий.</p>
        @endslot

    @endcomponent

@endsection

@section('other-pages')

    @component('frontend.sections.other-pages', [
        'pages'=>[
            'Офисные перегородки',
            'Алюминиевые окна',
            'Алюминиевые двери',
        ]
    ])
    @endcomponent

@endsection