<section class="main-products">
    <div class="container elem-dealing elem-dealing_medium">

        <div class="section__header align-center font-weight_extrabold">
            <h2 class="h2_medium">Основная продукция компании</h2>
        </div>

        <div class="main-products__categories">

            <div class="js-swiper swiper-container" data-swiper-destroy="xl">
                <div class="xl-grid-cols-3 swiper-wrapper">

                    <div class="main-products__category-card swiper-slide">
                        <div class="main-products__category-background" style="background-image: url({{ asset('img/sections/main-products/okna.jpg') }})"></div>
                        <div class="main-products__category-content">
                            <h3 class="main-products__category-title font-weight_bold">Окна</h3>
                            <div class="main-products__category-list">
                                <a href="{{ route('products', 'plastikovye-okna') }}" class="main-products__category-list-item">Пластиковые</a>
                                <a href="{{ route('products', 'alyuminievye-okna') }}" class="main-products__category-list-item">Алюминиевые</a>
                            </div>
                        </div>
                    </div>

                    <div class="main-products__category-card swiper-slide">
                        <div class="main-products__category-background" style="background-image: url({{ asset('img/sections/main-products/dveri.jpg') }})"></div>
                        <div class="main-products__category-content">
                            <h3 class="main-products__category-title font-weight_bold">Двери</h3>
                            <div class="main-products__category-list">
                                <a href="{{ route('products', 'plastikovye-dveri') }}" class="main-products__category-list-item">Пластиковые</a>
                                <a href="{{ route('products', 'alyuminievye-dveri') }}" class="main-products__category-list-item">Алюминиевые</a>
                            </div>
                        </div>
                    </div>

                    <div class="main-products__category-card swiper-slide">
                        <div class="main-products__category-background" style="background-image: url({{ asset('img/sections/main-products/balkoni.jpg') }})"></div>
                        <div class="main-products__category-content">
                            <h3 class="main-products__category-title font-weight_bold">Балконы и лоджии</h3>
                            <div class="main-products__category-list">
                                <a href="{{ route('products', 'plastikovye-balkony') }}" class="main-products__category-list-item">Пластиковые</a>
                                <a href="{{ route('products', 'alyuminievye-balkony') }}" class="main-products__category-list-item">Алюминиевые</a>
                            </div>
                        </div>
                    </div>

                    <div class="main-products__category-card swiper-slide">
                        <div class="main-products__category-background" style="background-image: url({{ asset('img/sections/main-products/konstrukcii.jpg') }})"></div>
                        <div class="main-products__category-content">
                            <h3 class="main-products__category-title font-weight_bold">Конструкции</h3>
                            <div class="main-products__category-list">
                                <a href="{{ route('products', 'alyuminievye-konstruktsii') }}" class="main-products__category-list-item">Алюминиевые конструкции</a>
                                <a href="{{ route('products', 'ofisnye-peregorodki') }}" class="main-products__category-list-item">Перегородки</a>
                            </div>
                        </div>
                    </div>

                    <div class="main-products__category-card main-products__category-card_big swiper-slide">
                        <div class="main-products__category-background" style="background-image: url({{ asset('img/sections/main-products/ostekleniye.jpg') }})"></div>
                        <div class="main-products__category-content">
                            <h3 class="main-products__category-title font-weight_bold">Остекление</h3>
                            <div class="main-products__category-lists-group">
                                <div class="main-products__category-list">
                                    <a href="{{ route('products', 'osteklenie-domov') }}" class="main-products__category-list-item">Домов и коттеджей</a>
                                    <a href="{{ route('products', 'osteklenie-besedok-verand-i-terras') }}" class="main-products__category-list-item">Беседок, веранд и террас</a>
                                    <a href="{{ route('products', 'osteklenie-basseynov') }}" class="main-products__category-list-item">Бассейнов</a>
                                    <a href="{{ route('products', 'osteklenie-kafe-i-restoranov') }}" class="main-products__category-list-item">Кафе и ресторанов</a>
                                    <a href="{{ route('products', 'osteklenie-oteley-i-gostinits') }}" class="main-products__category-list-item">Отелей и гостиниц</a>
                                </div>
                                <div class="main-products__category-list">
                                    <a href="{{ route('products', 'fasadnoe-osteklenie') }}" class="main-products__category-list-item">Фасадное</a>
                                    <a href="{{ route('products', 'panoramnoe-osteklenie') }}" class="main-products__category-list-item">Панорамное</a>
                                    <a href="{{ route('products', 'razdvizhnye-okna-i-dveri') }}" class="main-products__category-list-item">Раздвижное</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-scrollbar hidden_xl"></div>
            </div>

        </div>

    </div>
</section>