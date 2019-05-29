@extends('backend.templates.admin')

@section('page_content')

    <div class="ui middle aligned two column centered grid height-full">
        <div class="column">

            <div class="ui red top attached segment">
                <h3 class="ui header">Новая страница</h3>
            </div>

            <div class="ui bottom attached segment">
                <form class="ui form large" method="POST" action="{{ route('pages.store') }}">
                    @csrf

                    <div class="field">
                        <label>Название</label>
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

                    <div class="field">
                        <label>meta_description</label>
                        <div class="ui fluid input">
                            <input type="text" name="meta_description">
                        </div>
                    </div>

                    <div class="field">
                        <label>Категория</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="category_id">
                            <i class="dropdown icon"></i>
                            <div class="default text">Gender</div>
                            <div class="menu">
                                <div class="item" data-value="1">Male</div>
                                <div class="item" data-value="0">Female</div>
                            </div>
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