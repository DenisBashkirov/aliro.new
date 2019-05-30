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

@endsection