@extends('backend.templates.admin')

@section('page_content')

    <div class="ui middle aligned two column centered grid height-full">
        <div class="column">

            <div class="ui blue inverted top attached segment">
                <h3 class="ui header">Редактирование категории страниц сайта</h3>
            </div>

            <form class="ui form large" method="POST" action="{{ route('page_categories.update', $category->id) }}">
                @csrf
                @method('PATCH')

                <div class="ui attached segment">
                    <div class="field">
                        <label>Название</label>
                        <div class="ui fluid input">
                            <input type="text" name="name" value="{{ $category->name }}">
                        </div>
                    </div>
                </div>

                <div class="ui attached segment">

                    <div class="ui accordion">

                        <div class="title">
                            <i class="dropdown icon"></i>
                            расширенные
                        </div>

                        <div class="content">

                            <div class="field">
                                <label>slug</label>
                                <div class="ui fluid input">
                                    <input type="text" name="slug" placeholder="автоматически" value="{{ $category->slug }}">
                                </div>
                            </div>

                            <div class="field">
                                <label>Комментарий</label>
                                <div class="ui fluid input">
                                    <input type="text" name="comment" value="{{ $category->comment }}">
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="ui botttom attached segment">
                    <div class="ui two column middle aligned grid">
                        <div class="column">
                            <button class="ui blue button" type="submit">сохранить</button>
                            <a href="{{ url()->previous() }}" class="ui button">Отмена</a>
                        </div>
                        <div class="column right aligned">
                            <a href="{{ route('page_categories.destroy', $category->id) }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Точно удалить?"><i class="trash icon red"></i></a>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>

@endsection