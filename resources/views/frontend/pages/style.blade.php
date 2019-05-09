@extends('frontend.templates.main')

@section('main_content')

    <div class="container">

        <div class="section">
            <h1 class="h1 h1_huge">Заголовок первого уровня huge</h1>
            <h1 class="h1 h1_large">Заголовок первого уровня large</h1>
            <h1 class="h1 h1_big">Заголовок первого уровня big</h1>
            <h1 class="h1 h1_medium">Заголовок первого уровня medium</h1>
            <h1 class="h1 h1_small">Заголовок первого уровня small</h1>
            <h1 class="h1 h1_tiny">Заголовок первого уровня tiny</h1>
            <h1 class="h1 h1_mini">Заголовок первого уровня mini</h1>
        </div>

        <div class="section">
            <h2 class="h2 h2_huge">Заголовок второго уровня huge</h2>
            <h2 class="h2 h2_large">Заголовок второго уровня large</h2>
            <h2 class="h2 h2_big">Заголовок второго уровня big</h2>
            <h2 class="h2 h2_medium">Заголовок второго уровня medium</h2>
            <h2 class="h2 h2_small">Заголовок второго уровня small</h2>
            <h2 class="h2 h2_tiny">Заголовок второго уровня tiny</h2>
            <h2 class="h2 h2_mini">Заголовок второго уровня mini</h2>
        </div>

        <div class="section">
            <h3 class="h3 h3_huge">Заголовок третьего уровня huge</h3>
            <h3 class="h3 h3_large">Заголовок третьего уровня large</h3>
            <h3 class="h3 h3_big">Заголовок третьего уровня big</h3>
            <h3 class="h3 h3_medium">Заголовок третьего уровня medium</h3>
            <h3 class="h3 h3_small">Заголовок третьего уровня small</h3>
            <h3 class="h3 h3_tiny">Заголовок третьего уровня tiny</h3>
            <h3 class="h3 h3_mini">Заголовок третьего уровня mini</h3>
        </div>

        <div class="section">
            <h4 class="h4 h4_huge">Заголовок четвёртого уровня huge</h4>
            <h4 class="h4 h4_large">Заголовок четвёртого уровня large</h4>
            <h4 class="h4 h4_big">Заголовок четвёртого уровня big</h4>
            <h4 class="h4 h4_medium">Заголовок четвёртого уровня medium</h4>
            <h4 class="h4 h4_small">Заголовок четвёртого уровня small</h4>
            <h4 class="h4 h4_tiny">Заголовок четвёртого уровня tiny</h4>
            <h4 class="h4 h4_mini">Заголовок четвёртого уровня mini</h4>
        </div>

        <section>

            <h2 class="h2 h2_medium">Forms</h2>

            <section>
                <h3 class="h3 h3_tiny">large vertical</h3>

                <form action="#">
                    <div class="form-group form-group_vertical form-group_large form-group-x3">
                        <input type="text" class="form-group__input" placeholder="Ваше имя">
                        <input type="text" class="form-group__input" placeholder="Телефон">
                        <button type="submit" class="form-group__submit">Получить скидку</button>
                    </div>
                </form>
            </section>

            <section style="margin-top: 50px;">
                <h3 class="h3 h3_tiny">big horizontal</h3>

                    <form action="#">
                        <div class="form-group form-group_horizontal form-group_large group_large-x3">
                            <input type="text" class="form-group__input" placeholder="Ваше имя">
                            <input type="text" class="form-group__input" placeholder="Телефон">
                            <button type="submit" class="form-group__submit">Получить скидку</button>
                        </div>
                    </form>
            </section>

            <section style="margin-top: 50px;">
                <div class="container">
                    <p style="font-weight: bold; margin-bottom: 10px;">big vertical</p>

                    <form action="#">
                        <div class="form-group form-group_vertical form-group_big form-group-x3">
                            <input type="text" class="form-group__input" placeholder="Ваше имя">
                            <input type="text" class="form-group__input" placeholder="Телефон">
                            <button type="submit" class="form-group__submit">Получить скидку</button>
                        </div>
                    </form>

                </div>
            </section>


            <section style="margin-top: 50px;">
                <div class="container">
                    <p style="font-weight: bold; margin-bottom: 10px;">big horizontal</p>

                    <form action="#">
                        <div class="form-group form-group_horizontal form-group_big group_big-group_big-x3">
                            <input type="text" class="form-group__input" placeholder="Ваше имя">
                            <input type="text" class="form-group__input" placeholder="Телефон">
                            <button type="submit" class="form-group__submit">Получить скидку</button>
                        </div>
                    </form>

                </div>
            </section>


            <section style="margin-top: 50px;">
                <div class="container">
                    <p style="font-weight: bold; margin-bottom: 10px;">medium vertical</p>

                    <form action="#">
                        <div class="form-group form-group_vertical form-group_medium form-group-x3">
                            <input type="text" class="form-group__input" placeholder="Ваше имя">
                            <input type="text" class="form-group__input" placeholder="Телефон">
                            <button type="submit" class="form-group__submit">Получить скидку</button>
                        </div>
                    </form>

                </div>
            </section>

            <section style="margin-top: 50px;">
                <div class="container">
                    <p style="font-weight: bold; margin-bottom: 10px;">medium horizontal</p>

                    <form action="#">
                        <div class="form-group form-group_horizontal form-group_medium group_medium-group_medium-x3">
                            <input type="text" class="form-group__input" placeholder="Ваше имя">
                            <input type="text" class="form-group__input" placeholder="Телефон">
                            <button type="submit" class="form-group__submit">Получить скидку</button>
                        </div>
                    </form>

                </div>
            </section>

        </section>

    </div>

@endsection