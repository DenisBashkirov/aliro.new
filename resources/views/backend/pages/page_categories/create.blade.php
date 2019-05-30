@extends('backend.templates.admin')

@section('page_content')

    <div class="ui middle aligned two column centered grid height-full">
        <div class="column">

            <div class="ui blue inverted top attached segment">
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

                    <div class="ui accordion">

                        <div class="title">
                            <i class="dropdown icon"></i>
                            расширенные
                        </div>

                        <div class="content">

                            <div class="field">
                                <label>slug</label>
                                <div class="ui fluid input">
                                    <input type="text" name="slug" placeholder="автоматически">
                                </div>
                            </div>

                            <div class="field">
                                <label>Комментарий</label>
                                <div class="ui fluid input">
                                    <input type="text" name="comment">
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="ui two column middle aligned grid">
                        <div class="column">
                            <button class="ui blue button" type="submit">сохранить</button>
                            <a href="{{ url()->previous() }}" class="ui button">Отмена</a>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection