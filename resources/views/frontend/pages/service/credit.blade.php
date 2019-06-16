@extends('frontend.templates.main')

@section('template_content')

    <div class="container">
        <div class="elem-dealing elem-dealing_massive">

            <div class="md-grid-cols-3 flex-column-sm align-center">

                <div class="credit-terms">
                    <div class="credit-terms-item">
                        <div class="credit-terms-item__title h3_tiny font-weight_semibold">
                            <span class="credit-terms-item__digit">0</span>
                            <span>месяцев</span>
                        </div>
                        <div class="credit-terms-item__text">первоначальный взнос</div>
                    </div>
                </div>

                <div class="credit-terms">
                    <div class="credit-terms-item">
                        <div class="credit-terms-item__title h3_tiny font-weight_semibold">
                            <span class="credit-terms-item__digit">3</span>
                            <span>месяца</span>
                        </div>
                        <div class="credit-terms-item__text">минимальный срок</div>
                    </div>
                </div>

                <div class="credit-terms">
                    <div class="credit-terms-item">
                        <div class="credit-terms-item__title h3_tiny font-weight_semibold">
                            <span class="credit-terms-item__digit">36</span>
                            <span>месяцев</span>
                        </div>
                        <div class="credit-terms-item__text">максимальный срок</div>
                    </div>
                </div>

            </div>

            <div class="section-grey section-padding_massive section-full-width">
                <div class="container">

                    <div class="md-flex-row-2 flex-column-sm align-items-center">

                        <div class="elem-dealing elem-dealing_mini">
                            <h2 class="h3_large font-weight_extrabold">Получите максимально выгодные условия по кредиту</h2>
                            <p class="h3_tiny font-weight_regular line-height-reset">Оставьте заявку на кредит или рассрочку</p>
                        </div>

                        <div>
                            <form action="{{ route('thanks') }}" class="form alloka-catch-form" method="post">
                                @csrf
                                <input type="hidden" name="capture_form_name" value="заявка на кредит">
                                <div class="form-group form-group_vertical form-group_large group_large-x4">
                                    <input type="text" class="form-group__input alloka-catch-form-input-name" name="name" placeholder="Ваше имя" required>
                                    <input type="text" class="form-group__input js-mask_phone alloka-catch-form-input-phone" name="phone" placeholder="Телефон" required>
                                    <input type="text" class="form-group__input" name="period" placeholder="Желаемый срок кредита" required>
                                    <button type="submit" class="form-group__submit">Отправить заявку</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

            <section class="elem-dealing elem-dealing_big">

                <h2 class="h2_medium font-weight_extrabold align-center">Банки партнёры</h2>

                <div class="md-grid-cols-3 flex-column-sm align-items-center">
                    
                    <div class="img-container">
                        <img src="{{ asset('img/partners/tinkoff_bank.png') }}" alt="Тинькофф Банк">
                    </div>

                    <div class="img-container">
                        <img src="{{ asset('img/partners/home_credit_bank.png') }}" alt="Хоум Кредит Банк">
                    </div>

                    <div class="img-container">
                        <img src="{{ asset('img/partners/otp_bank.png') }}" alt="ОТП Банк">
                    </div>
                    
                </div>

            </section>

        </div>
    </div>

@endsection