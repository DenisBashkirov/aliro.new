@extends('frontend.templates.service')

@section('template_content')

    <div class="container title-screen title-screen_service">

        <div class="elem-dealing elem-dealing_large">

            <div class="elem-dealing elem-dealing_medium">

                <div class="title-screen__page-title">
                    <h1 class="h1_mini font-weight_extrabold align-center">Ошибка 404</h1>
                    <p class="title-screen__subtitle align-center">Страница не найдна :(</p>
                </div>

                <div class="text-container">
                    <p class="font-weight_regular">Очень жаль, страница по данному адресу не найдена или была удалена.</p>
                </div>

            </div>

            <div class="justify-content-around">

                <a href="{{ route('home') }}" class="link text-iconed h3_tiny">
                    <span class="icon-home"></span>
                    <span>Главная</span>
                </a>

                <a href="{{ route('contacts') }}" class="link text-iconed h3_tiny">
                    <span class="icon-phone"></span>
                    <span>Контакты</span>
                </a>

            </div>

        </div>

    </div>

@endsection