@extends('backend.templates.admin')

@section('page_content')

    <div class="ui one column grid">
        <div class="column">
            <h1 class="ui header">Пункты меню навигации</h1>
        </div>
    </div>

    <div class="ui one column grid">
        <div class="column">
            <a href="{{ route('nav_menu_items.create') }}" class="ui button primary"><i class="add icon"></i>Создать</a>
        </div>
    </div>

    @if (count($menu_items))
        <div class="ui one column grid">
            <div class="column">

                <h2 class="ui header">Список навигации</h2>

                <table class="ui celled striped table">
                    <thead>
                    <tr>
                        <th class="collapsing">порядок</th>
                        <th>текст</th>
                        <th>Вложенные пунткы</th>
                        <th>страница</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menu_items as $menu_item)
                        <tr>
                            <td>{{ $menu_item->ordering }}</td>
                            <td>
                                <a href="{{ route('nav_menu_items.edit', $menu_item->id) }}">{{ $menu_item->text }}</a>
                            </td>
                            <td>
                                <ul>
                                    @if(count($menu_item->dropdownItems))
                                        @foreach($menu_item->dropdownItems as $dropownItem)
                                            <li>{{ $dropownItem->text }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </td>
                            <td>{{ $menu_item->page ? $menu_item->page->name : '-' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    @endif

@endsection