<div class="title-screen title-screen_{{ $title_screen_size }}" style="background: url({{ asset('img/sections/title-screen/home_xl.jpg') }}">
    <div class="title-screen__container title-screen__container_{{ $title_screen_size }} container">

        <div class="title-screen__page-title">
            <div class="title-screen__breadcrumbs breadcrumbs">
                <a href="#" class="breadcrumbs__item">Главная</a>
                <span class="breadcrumbs__arrow icon-arrow"></span>
                <a href="#" class="breadcrumbs__item">Продукция</a>
                <span class="breadcrumbs__arrow icon-arrow"></span>
                <span class="breadcrumbs__item">Окна и двери</span>
            </div>
            <h1 class="h1">{{ $page->h1 }}</h1>
            @if($page->subhead)
                <p class="title-screen__subtitle">{{ $page->subhead }}</p>
            @endif
        </div>

    </div>
</div>