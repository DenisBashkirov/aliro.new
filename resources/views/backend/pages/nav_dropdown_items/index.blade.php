@extends('backend.templates.admin')

@section('page_content')

    <div class="ui one column grid">
        <div class="column">
            <h1 class="ui header">Пункты выпадающих меню навигации</h1>
        </div>
    </div>

    <div class="ui one column grid">
        <div class="column">
            <a href="{{ route('nav_dropdown_items.create') }}" class="ui button primary"><i class="add icon"></i>Создать</a>
        </div>
    </div>

    @if (count($nav_dropdown_items))
        <div class="ui one column grid">
            <div class="column">

                <h2 class="ui header">Список страниц</h2>

                <table class="ui celled striped table">
                    <thead>
                    <tr>
                        <th class="collapsing">порядок</th>
                        <th>текст</th>
                        <th>родительское меню</th>
                        <th>родительская секция</th>
                        <th>страница</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($nav_dropdown_items as $dropdown_item)
                        @if(!$dropdown_item->parent)
                            <tr>

                                <td>{{ $dropdown_item->ordering ?? '-' }}</td>

                                <td>
                                    <div class="ui header">
                                        <a href="{{ route('nav_dropdown_items.edit', $dropdown_item->id) }}">
                                            <i class="folder open outline icon"></i>
                                            {{ $dropdown_item->text }}
                                        </a>
                                    </div>
                                </td>

                                <td>{{ $dropdown_item->menu_item ? $dropdown_item->menu_item->text : '-' }}</td>

                                <td>{{ $dropdown_item->parent ? $dropdown_item->parent->text : '-' }}</td>

                                <td>{{ $dropdown_item->page_id ? $dropdown_item->page->name : '-' }}</td>

                            </tr>
                            @foreach($dropdown_item->children as $child)
                                <tr>
                                    <td>{{ $child->ordering ?? '-' }}</td>
                                    <td>
                                        <a href="{{ route('nav_dropdown_items.edit', $child->id) }}">
                                            <i class="file outline icon"></i>
                                            {{ $child->text }}
                                        </a>
                                    </td>
                                    <td>{{ $child->menu_item ? $child->menu_item->text : '-' }}</td>
                                    <td>{{ $child->parent ? $child->parent->text : '-' }}</td>
                                    <td>{{ $child->page ? $child->page->name : '-' }}</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    @endif

@endsection