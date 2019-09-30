<header class="header">
    <div class="header__container container">

        <div class="header__logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('svg/company_logo/main.svg') }}" alt="Логотип Индустрия окон">
            </a>
        </div>

        <div class="header__menu">
            <nav class="nav">

                @foreach($menu_items as $menu_item)
                    @if($menu_item->page)
                        <a href="{{ $menu_item->page->urn }}" class="nav__item">{{ $menu_item->text }}</a>
                    @else
                        <div class="nav__item">
                            <div>{{ $menu_item->text }}</div>
                            <div class="nav__item-arrow"><span class="icon-arrow"></span></div>
                            <div class="nav__dropdown">
                                @if($menu_item->dropdown_size == 'big')
                                    <div class="nav__dropdown-body nav__dropdown-grid">
                                        <div class="nav__dropdown-back-button hidden_md js-dropdown-hide">
                                            <span class="icon-arrow"></span>
                                            <span>назад</span>
                                        </div>
                                        @foreach($menu_item->dropdownItems as $dropdownItem)
                                            <div class="nav__category">
                                                <div class="nav__category-title">{{ $dropdownItem->text }}</div>
                                                <div class="nav__category-content">
                                                    @foreach($dropdownItem->children as $dropdownItemChild)
                                                        <a href="{{ $dropdownItemChild->page->urn }}" class="nav__dropdown-item">{{ $dropdownItemChild->text }}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="nav__dropdown-body">
                                        <div class="nav__dropdown-back-button hidden_md js-dropdown-hide">
                                            <span class="icon-arrow"></span>
                                            <span>назад</span>
                                        </div>
                                        <div class="nav__dropdown-list">
                                            @foreach($menu_item->dropdownItems as $dropdownItem)
                                                @if($dropdownItem->page)
                                                    <a href="{{ $dropdownItem->page->urn }}" class="nav__dropdown-item">{{ $dropdownItem->text }}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                @endforeach

            </nav>
        </div>

        <div class="header__phone">
            <a href="tel:88612139292" class="mango-number">8(861)213-92-92</a>
        </div>

        <div class="header__hamburger">
            <button class="hamburger hamburger--3dxy js-hamburger" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
        </div>

    </div>
</header>