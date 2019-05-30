@extends('backend.templates.admin')

@section('page_content')

    <div class="ui middle aligned two column centered grid height-full">
        <div class="column">

            <div class="ui blue inverted top attached segment">
                <h3 class="ui header">Новый пункт навигационного меню</h3>
            </div>

            <div class="ui attached segment">

                <form class="ui form large" method="POST" action="{{ route('nav_menu_items.store') }}">
                    @csrf

                    <div class="field">
                        <label>текст</label>
                        <div class="ui fluid input">
                            <input type="text" name="text">
                        </div>
                    </div>

                    <div class="field">
                        <label>страница</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="page_id">
                            <i class="dropdown icon"></i>
                            <div class="default text">Без страницы</div>
                            <div class="menu">
                                <div class="item" data-value="null">Без страницы</div>
                                @foreach($pages as $page)
                                    <div class="item" data-value="{{ $page->id }}">{{ $page->name }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label>порядок</label>
                        <div class="ui fluid input">
                            <input type="number" name="ordering" placeholder="не указан">
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