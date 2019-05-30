@extends('backend.templates.admin')

@section('page_content')

    <div class="ui one column grid">
        <div class="column">
            <h1 class="ui header">Категории страниц сайта</h1>
        </div>
    </div>

    <div class="ui one column grid">
        <div class="column">
            <a href="{{ route('page_categories.create') }}" class="ui button primary"><i class="add icon"></i>Создать</a>
        </div>
    </div>

    @if (count($categories))
        <div class="ui one column grid">
            <div class="column">

                <h2 class="ui header">Список страниц</h2>

                <table class="ui celled striped table">
                    <thead>
                    <tr>
                        <th>Название</th>
                        <th>slug</th>
                        <th>Комментарий</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>
                                <a href="{{ route('page_categories.edit', $category->id) }}">{{ $category->name }}</a>
                            </td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ $category->comment }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    @endif

@endsection