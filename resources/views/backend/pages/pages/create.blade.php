@extends('backend.templates.admin')

@section('page_content')

    <div class="ui middle aligned two column centered grid height-full">
        <div class="column">

            <div class="ui blue inverted top attached segment">
                <h3 class="ui header">Новая страница</h3>
            </div>

            <form class="ui form large" method="POST" action="{{ route('pages.store') }}">
                @csrf

                <div class="ui attached segment">
                    <div class="field">
                        <label>название</label>
                        <div class="ui fluid input">
                            <input type="text" name="name">
                        </div>
                    </div>

                    <div class="field">
                        <label>title</label>
                        <div class="ui fluid input">
                            <input type="text" name="title">
                        </div>
                    </div>

                    <div class="field">
                        <label>H1</label>
                        <div class="ui fluid input">
                            <input type="text" name="h1">
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
                                <label>подзаголовок</label>
                                <div class="ui fluid input">
                                    <input type="text" name="subhead">
                                </div>
                            </div>

                            <div class="field">
                                <label>meta_description</label>
                                <div class="ui fluid input">
                                    <input type="text" name="meta_description">
                                </div>
                            </div>

                            <div class="field">
                                <label>категория</label>
                                <div class="ui selection dropdown">
                                    <input type="hidden" name="category_id">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Без категории</div>
                                    <div class="menu">
                                        <div class="item" data-value="null">Без категории</div>
                                        @foreach($categories as $category)
                                            <div class="item" data-value="{{ $category->id }}">{{ $category->name }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <label>slug</label>
                                <div class="ui fluid input">
                                    <input type="text" name="slug" placeholder="автоматически">
                                </div>
                            </div>

                            <div class="field">
                                <label>urn</label>
                                <div class="ui fluid input">
                                    <input type="text" name="urn" placeholder="автоматически">
                                </div>
                            </div>
                        </div>
                        </div>

                </div>

                <div class="ui botttom attached segment">
                    <div class="ui two column middle aligned grid">
                        <div class="column">
                            <button class="ui blue button" type="submit">Создать</button>
                        </div>
                        <div class="column right aligned">
                            <a href="{{ url()->previous() }}">отмена</a>
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>

@endsection