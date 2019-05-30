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
                        <th>порядок</th>
                        <th>текст</th>
                        <th>родительский пункт</th>
                        <th>страница</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($nav_dropdown_items as $dropdown_item)
                        <tr>
                            <td>{{ $dropdown_item->ordering ?? '-' }}</td>
                            <td>
                                <a href="{{ route('nav_dropdown_items.edit', $dropdown_item->id) }}">{{ $dropdown_item->text }}</a>
                            </td>
                            <td>{{ $dropdown_item->parent ? $dropdown_item->parent->text : '-' }}</td>
                            <td>{{ $dropdown_item->page ? $dropdown_item->page->name : '-' }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    @endif

@endsection