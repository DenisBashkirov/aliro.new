@extends('backend.templates.main')

@section('main_content')


    <div class="ui middle aligned four column centered grid height-full">
        <div class="column">

            <div class="ui red top attached segment">
                <h3 class="ui header">Авторизация</h3>
            </div>

            <div class="ui bottom attached segment">
                <form class="ui form large">

                    <div class="field">
                        <label>Email</label>
                        <div class="ui left icon fluid input">
                            <i class="envelope icon"></i>
                            <input type="email" name="email">
                        </div>
                    </div>

                    <div class="field">
                        <label>Пароль</label>
                        <div class="ui left icon fluid input">
                            <i class="key icon"></i>
                            <input type="password" name="password">
                        </div>
                    </div>

                    <div class="ui two column middle aligned grid">
                        <div class="column">
                            <button class="ui blue button" type="submit">Войти</button>
                        </div>
                        <div class="column right aligned">
                            <a href="{{ route('register') }}">Регистрация</a>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>


@endsection
