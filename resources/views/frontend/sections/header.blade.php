<header class="header">
    <div class="header__container container">

        <div class="header__logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('svg/company_logo/main.svg') }}" alt="Логотип Индустрия окон">
            </a>
        </div>

        <div class="header__menu">
            <nav class="nav">

                <a href="{{ route('home') }}" class="nav__item hidden_md">Главная</a>

                <div class="nav__item">
                    <div>Продукция</div>
                    <div class="nav__item-arrow"><span class="icon-arrow"></span></div>

                    <div class="nav__dropdown">
                        <div class="nav__dropdown-body nav__dropdown-grid">
                            <div class="nav__dropdown-back-button hidden_md js-dropdown-hide">
                                <span class="icon-arrow"></span>
                                <span>назад</span>
                            </div>
                            <div class="nav__category">
                                <div class="nav__category-title">Окна</div>
                                <div class="nav__category-content">
                                    <a href="{{ route('products', 'plastikovye-okna') }}" class="nav__dropdown-item">Пластиковые</a>
                                    <a href="{{ route('products', 'alyuminievye-okna') }}" class="nav__dropdown-item">Алюминиевые</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Энергосберегающие</a>
                                </div>
                            </div>
                            <div class="nav__category">
                                <div class="nav__category-title">Двери</div>
                                <div class="nav__category-content">
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Пластиковые</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Алюминиевые</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Раздвижные</a>
                                </div>
                            </div>
                            <div class="nav__category">
                                <div class="nav__category-title">Балконы и лоджии</div>
                                <div class="nav__category-content">
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Пластиковые</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Алюминиевые</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Раздвижные</a>
                                </div>
                            </div>
                            <div class="nav__category">
                                <div class="nav__category-title">Конструкции</div>
                                <div class="nav__category-content">
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Алюминиевые конструкции</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Перегородки</a>
                                </div>
                            </div>
                            <div class="nav__category nav__category_big">
                                <div class="nav__category-title">Остекление</div>
                                <div class="nav__category-content nav__category-content_horizontal">
                                    <div class="nav__dropdown-items-group">
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Домов и коттеджей</a>
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Беседок, веранд и террас</a>
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Бассейнов</a>
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Кафе и ресторанов</a>
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Отелей и гостиниц</a>
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Зданий и помещений</a>
                                    </div>
                                    <div class="nav__dropdown-items-group">
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Витражное</a>
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Фасадное</a>
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Безрамное</a>
                                        <a href="{{ route('products', 'razdvizhnye-okna-i-dveri') }}" class="nav__dropdown-item">Раздвижное</a>
                                        <a href="{{ route('products', '') }}" class="nav__dropdown-item">Защитное</a>
                                    </div>
                                </div>
                            </div>
                            <div class="nav__category">
                                <div class="nav__category-title">Дизайнерские решения</div>
                                <div class="nav__category-content">
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Цветные окна и двери</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Декоративные решения</a>
                                </div>
                            </div>
                            <div class="nav__category">
                                <div class="nav__category-title">Комплектующие</div>
                                <div class="nav__category-content">
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Стеклопакеты</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Фурнитура</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Подоконники</a>
                                    <a href="{{ route('products', '') }}" class="nav__dropdown-item">Москитные сетки</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="nav__item">
                    <div>Компания</div>
                    <div class="nav__item-arrow"><span class="icon-arrow"></span></div>
                    <div class="nav__dropdown">
                        <div class="nav__dropdown-body">
                            <div class="nav__dropdown-back-button hidden_md js-dropdown-hide">
                                <span class="icon-arrow"></span>
                                <span>назад</span>
                            </div>
                            <div class="nav__dropdown-list">
                                <a href="{{ route('company', 'salon-okon') }}" class="nav__dropdown-item">Салон окон</a>
                                <a href="{{ route('company', 'production') }}" class="nav__dropdown-item">Производство</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="nav__item">
                    <div>Сервис</div>
                    <div class="nav__item-arrow"><span class="icon-arrow"></span></div>
                    <div class="nav__dropdown">
                        <div class="nav__dropdown-body">
                            <div class="nav__dropdown-back-button hidden_md js-dropdown-hide">
                                <span class="icon-arrow"></span>
                                <span>назад</span>
                            </div>
                            <div class="nav__dropdown-list">
                                <a href="#" class="nav__dropdown-item">Кредит</a>
                                <a href="#" class="nav__dropdown-item">Гарантия</a>
                                <a href="#" class="nav__dropdown-item">Замер и монтаж</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#" class="nav__item hidden">
                    <span>Отзывы</span>
                    <span class="nav__item-label">345</span
                </a>

                <a href="{{ route('contacts') }}" class="nav__item">Контакты</a>

            </nav>
        </div>

        <div class="header__phone">
            <a href="tel:+78612139292">8(861)213-92-92</a>
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