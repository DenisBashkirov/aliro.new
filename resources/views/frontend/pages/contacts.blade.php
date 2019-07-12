@extends('frontend.templates.main')

@section('template_content')

    <div class="container elem-dealing elem-dealing_massive">

        @component('frontend.pages.contacts.division', [
            'title'=>'Салон окон "Алиро"',
            'address'=>'г. Краснодар, ул. Калинина, 258',
            'phone'=>'8(861)213-92-92',
            'link_text'=>'О салоне окон',
            'link_route'=>route('company', 'salon-okon'),
            'ymap_id'=>'ymap_retail'
        ])
            @slot('departments')
                <div class="contacts-section contacts-section_big">
                    @component('frontend.pages.contacts.department', ['staffed'=>true])
                        @slot('staff')

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Шестакова Анжела',
                                'position'=>'руководитель розничного отдела',
                                'email'=>'shestakova.anzhela@aliro.ru'
                            ]) @endcomponent

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Первышева Надежда',
                                'position'=>'менеджер по расчётам',
                                'email'=>'pervysheva.nadezhda@aliro.ru'
                            ]) @endcomponent

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Бондаренко Елена',
                                'position'=>'менеджер по расчётам',
                                'email'=>'bondarenko.elena@aliro.ru'
                            ]) @endcomponent

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Волков Дмитрий',
                                'position'=>'начальник бригады',
                                'email'=>'volkov.dmitriy@aliro.ru'
                            ]) @endcomponent

                        @endslot
                    @endcomponent
                </div>
            @endslot
        @endcomponent

        @component('frontend.pages.contacts.division', [
            'title'=>'Завод "Индустрия Окон"',
            'address'=>'п. Яблоновский, Шапсугское шоссе, 3/15',
            'link_text'=>'О производстве',
            'link_route'=>route('company', 'production'),
            'ymap_id'=>'ymap_production'
        ])
            @slot('departments')
                {{--
                <div class="contacts-section contacts-section_big">
                    @component('frontend.pages.contacts.department', ['title'=>'Дилерский отдел - региональные менеджеры', 'staffed'=>true])
                        @slot('staff')

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Кобзева Оксана',
                                'phone'=>'8-918-141-05-82',
                                'email'=>'kobzeva.oksana@aliro.ru'
                            ]) @endcomponent

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Завьялов Олег',
                                'phone'=>'8-918-141-05-82',
                                'email'=>'zavyalov.oleg@aliro.ru'
                            ]) @endcomponent

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Асватурьян Виталий',
                                'phone'=>'8-918-141-05-82',
                                'email'=>'asvaturyan.vitaliy@aliro.ru'
                            ]) @endcomponent

                        @endslot
                    @endcomponent
                </div>

                <div class="contacts-section contacts-section_big">
                    @component('frontend.pages.contacts.department', ['title'=>'Дилерский отдел - менеджеры по расчётам', 'staffed'=>true])
                        @slot('staff')

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Зайцева Юлия',
                                'phone'=>'8-918-141-05-82',
                                'email'=>'zayceva.yuliya@aliro.ru'
                            ]) @endcomponent

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Демидова Елена',
                                'phone'=>'8-918-141-05-82',
                                'email'=>'demidova.elena@aliro.ru'
                            ]) @endcomponent

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Гончарова Кристина',
                                'phone'=>'8-918-141-05-82',
                                'email'=>'goncharova.kristina@aliro.ru'
                            ]) @endcomponent

                        @endslot
                    @endcomponent
                </div>

                <div class="contacts-section contacts-section_big">
                    @component('frontend.pages.contacts.department', ['title'=>'Отдел логистики', 'staffed'=>true])
                        @slot('staff')

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Джура Игорь',
                                'position'=>'логист (край и регионы)',
                                'phone'=>'8-918-141-05-82',
                                'email'=>'dzhura.igor@aliro.ru'
                            ]) @endcomponent

                            @component('frontend.pages.contacts.employee-card', [
                                'name'=>'Логинов Евгений',
                                'position'=>'логист (Краснодар и пригород)',
                                'phone'=>'8-918-141-05-82',
                                'email'=>'loginov.evgeniy@aliro.ru'
                            ]) @endcomponent

                        @endslot
                    @endcomponent
                </div>

                <section class="contacts-section contacts-section_small">

                    <div class="contacts-section__grid">

                        @component('frontend.pages.contacts.department', [
                        'title'=>'Бухгалтерия ООО “Индустрия окон” (завод)',
                        'staffed'=>false,
                        'phone'=>'8-918-141-05-82',
                        'email'=>'tech.otdel@aliro.ru'
                    ]) @endcomponent

                        @component('frontend.pages.contacts.department', [
                            'title'=>'Бухгалтерия ООО “Алиро-Гранд” (салон окон)',
                            'staffed'=>false,
                            'phone'=>'8-918-141-05-82',
                            'email'=>'sharovarova.darya@aliro.ru'
                        ]) @endcomponent

                        @component('frontend.pages.contacts.department', [
                            'title'=>'Снабжение (отдел металло-пластиковых изделий)',
                            'staffed'=>false,
                            'phone'=>'8-918-141-05-82',
                            'email'=>'tech.otdel@aliro.ru'
                        ]) @endcomponent

                        @component('frontend.pages.contacts.department', [
                            'title'=>'Снабжение (отдел алюминиевых конструкций)',
                            'staffed'=>false,
                            'phone'=>'8-918-141-05-82',
                            'email'=>'inkina.alena@aliro.ru'
                        ]) @endcomponent

                    </div>
                </section>--}}
            @endslot
        @endcomponent

    </div>

@endsection

@section('page_head')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=8da8c2ec-adac-4e3c-9c9e-3e08b5d29ef3&lang=ru_RU" type="text/javascript"></script>
@endsection

@section('page_scripts')
    @include('frontend.sources.ymaps')
@endsection