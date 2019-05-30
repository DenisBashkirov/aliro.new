@extends('backend.templates.admin')

@section('page_content')

    <div class="ui middle aligned two column centered grid height-full">
        <div class="column">

            <div class="ui blue inverted top attached segment">
                <h3 class="ui header">Новый пункт выпадающего навигационного меню</h3>
            </div>

            <div class="ui attached segment">

                <form class="ui form large" method="POST" action="{{ route('nav_dropdown_items.update', $dropdown_item->id) }}">
                    @csrf
                    @method('PATCH')

                    <div class="field">
                        <label>текст</label>
                        <div class="ui fluid input">
                            <input type="text" name="text" value="{{ $dropdown_item->text }}">
                        </div>
                    </div>

                    <div class="field">
                        <label>родительский пункт меню</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="menu_item_id" value="{{ $dropdown_item->menu_item ? $dropdown_item->menu_item->id : null}}">
                            <i class="dropdown icon"></i>
                            <div class="default text">Без пункта меню</div>
                            <div class="menu">
                                <div class="item" data-value="">Без пункта меню</div>
                                @foreach($menu_items as $menu_item)
                                    <div class="item" data-value="{{ $menu_item->id }}">{{ $menu_item->text }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label>страница</label>
                        <div class="ui search selection dropdown">
                            <input type="hidden" name="page_id" value="{{ $dropdown_item->page_id }}">
                            <i class="dropdown icon"></i>
                            <div class="default text">Без страницы</div>
                            <div class="menu">
                                <div class="item" data-value="">Без страницы</div>
                                @foreach($pages as $page)
                                    <div class="item" data-value="{{ $page->id }}">{{ $page->name }}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label>родительский пункт</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="parent_id" value="{{ $dropdown_item->parent ? $dropdown_item->parent->id : null }}">
                            <i class="dropdown icon"></i>
                            <div class="default text">Без родителя</div>
                            <div class="menu">
                                <div class="item" data-value="">Без родителя</div>
                                @foreach($dropdown_items as $item)
                                    @if(!$item->parent && $item->id != $dropdown_item->id)
                                        <div class="item" data-value="{{ $item->id }}">{{ $item->text }}</div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label>порядок</label>
                        <div class="ui fluid input">
                            <input type="number" name="ordering" placeholder="не указан" value="{{ $dropdown_item->ordering }}">
                        </div>
                    </div>

                    <div class="ui two column middle aligned grid">
                        <div class="column">
                            <button class="ui blue button" type="submit">сохранить</button>
                            <a href="{{ url()->previous() }}" class="ui button">Отмена</a>
                        </div>
                        <div class="column right aligned">
                            <a href="{{ route('nav_dropdown_items.destroy', $dropdown_item->id) }}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Точно удалить?"><i class="trash icon red"></i></a>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection