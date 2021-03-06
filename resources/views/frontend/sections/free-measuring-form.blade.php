<section class="free-measuring-section">
    <div class="container">

        <div class="free-measuring-section__body">
            <div class="free-measuring-section__background-img"></div>

            <div class="free-measuring-section__text">
                <div class="free-measuring-section__title">
                    <h2 class="h2 h2_small">Запишитесь на замер</h2>
                </div>

                <ul class="free-measuring-section__list list list_checked list_white h3_tiny">
                    <li>Выполнение точного замера проёмов важно для гарантии правильного изготовления конструкций</li>
                    <li>Выезд мастера в пределах Краснодара выполняется бесплатно</li>
                </ul>
            </div>

            <div class="free-measuring-section__form">
                <form action="{{ route('thanks') }}" class="form alloka-catch-form" method="post">
                    @csrf
                    <input type="hidden" name="capture_form_name" value="запись на замер">
                    <div class="form-group form-group_horizontal form-group_large group_large-x3">
                        <input type="text" class="form-group__input alloka-catch-form-input-name" name="name" placeholder="Ваше имя" required>
                        <input type="text" class="form-group__input js-mask_phone alloka-catch-form-input-phone" name="phone" placeholder="Телефон" required>
                        <button type="submit" class="form-group__submit">Записаться</button>
                    </div>
                    <p class="form__agreement text_tiny">Нажимая кнопку "Записаться" вы даете согласие на обработку персональных данных</p>
                    <!--<div class="free-measuring-section__worker">
                        <img src="{{ asset('img/sections/free-measuring-form/worker.png') }}" alt="Специались по замерам">
                        <p class="free-measuring-section__worker-label">Резаченко Кирилл - специалист по замерам</p>
                    </div>-->
                </form>
            </div>

        </div>

    </div>
</section>