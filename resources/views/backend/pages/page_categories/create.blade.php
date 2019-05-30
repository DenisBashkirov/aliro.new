@extends('backend.templates.admin')

@section('page_content')

    <div class="ui middle aligned two column centered grid height-full">
        <div class="column">

            <div class="ui red top attached segment">
                <h3 class="ui header">Новая категория для страниц сайта</h3>
            </div>

            <div class="ui bottom attached segment">
                <form class="ui form large" method="POST" action="{{ route('page_categories.store') }}">
                    @csrf

                    <div class="field">
                        <label>Название</label>
                        <div class="ui fluid input">
                            <input type="text" name="name">
                        </div>
                    </div>

                    <div class="field">
                        <label>Комментарий (необязательно)</label>
                        <div class="ui fluid input">
                            <input type="text" name="comment">
                        </div>
                    </div>

                    <div class="ui two column middle aligned grid">
                        <div class="column">
                            <button class="ui blue button" type="submit">Создать</button>
                        </div>
                        <div class="column right aligned">
                            <a href="{{ url()->previous() }}">отмена</a>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>

@endsection