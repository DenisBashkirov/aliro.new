<div class="ui fixed menu">
    <a href="{{ route('pages.index') }}" class="item">Страницы</a>
    <a href="{{ route('page_categories.index') }}" class="item">Категории</a>
    <a href="{{ route('nav_menu_items.index') }}" class="item">Меню</a>
    <a href="{{ route('nav_dropdown_items.index') }}" class="item">Выпадающее меню</a>
    <div class="right menu">
        <a href="{{ route('logout') }}" class="item">
            <i class="logout icon"></i>
            Выйти
        </a>
    </div>
</div>