@extends('backend.templates.auth')

@section('main_content')

    <div class="ui middle aligned four column centered grid height-full">
        <div class="column">

            <div class="ui red top attached segment">
                <h3 class="ui header">Регистрация</h3>
            </div>

            <div class="ui bottom attached segment">
                <form class="ui form large" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="field @if ($errors->has('name')) error @endif">
                        <label>Имя</label>
                        <div class="ui left icon fluid input js-popup"
                            @if ($errors->has('name'))
                                data-html="
                                <ul>
                                    @foreach($errors->get('name') as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>"
                            @endif
                        >
                            <i class="user icon"></i>
                            <input type="text" name="name">
                        </div>
                    </div>

                    <div class="field @if ($errors->has('email')) error @endif">
                        <label>Email</label>
                        <div class="ui left icon fluid input js-popup"
                             @if ($errors->has('email'))
                             data-html="
                                <ul>
                                    @foreach($errors->get('email') as $error)
                                     <li>{{ $error }}</li>
                                    @endforeach
                                     </ul>"
                                @endif
                        >
                            <i class="envelope icon"></i>
                            <input type="email" name="email">
                        </div>
                    </div>

                    <div class="field @if ($errors->has('password')) error @endif">
                        <label>Пароль</label>
                        <div class="ui left icon fluid input js-popup"
                             @if ($errors->has('password'))
                             data-html="
                                <ul>
                                    @foreach($errors->get('password') as $error)
                                     <li>{{ $error }}</li>
                                    @endforeach
                                     </ul>"
                                @endif
                        >
                            <i class="key icon"></i>
                            <input type="password" name="password">
                        </div>
                    </div>

                    <div class="field @if ($errors->has('password_confirmation')) error @endif">
                        <label>Повтор пароля</label>
                        <div class="ui left icon fluid input js-popup"
                             @if ($errors->has('password-confirmation'))
                             data-html="
                                <ul>
                                    @foreach($errors->get('password_confirmation') as $error)
                                     <li>{{ $error }}</li>
                                    @endforeach
                                     </ul>"
                                @endif
                        >
                            <i class="key icon"></i>
                            <input type="password" name="password_confirmation">
                        </div>
                    </div>

                    <div class="ui two column middle aligned grid">
                        <div class="column">
                            <button class="ui blue button" type="submit">Готово</button>
                        </div>
                        <div class="column right aligned">
                            <a href="{{ route('login') }}">Авторизация</a>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>

@endsection