@extends('backend.templates.admin')

@section('page_content')

    <div class="ui one column grid">
        <div class="column">
            <a href="{{ route('pages.create') }}" class="ui button primary"><i class="add icon"></i>Создать</a>
        </div>
    </div>

    @if (count($pages))
        <div class="ui one column grid">
            <div class="column">

                <h2 class="ui header">Список страниц</h2>

                <table class="ui celled striped table">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>slug</th>
                            <th>title</th>
                            <th>h1</th>
                            <th>meta_description</th>
                            <th>Категория</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>
                                    <a href="{{ route('pages.show', $page->id) }}">{{ $page->name }}</a>
                                </td>
                                <td>{{ $page->slug }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->h1 }}</td>
                                <td>{{ strlen($page->meta_description) }}</td>
                                <td>
                                    @if($page->category)
                                        {{ $page->category->name }}
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    @endif

@endsection