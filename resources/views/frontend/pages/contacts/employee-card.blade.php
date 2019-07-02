<div class="employee-card swiper-slide">

    <div class="employee-card__photo">
        <img src="{{ asset('img/contacts/' . Str::slug($name) .'.jpg') }}" alt="{{ $name }}">
    </div>

    <div class="employee-card__body">

        <p class="employee-card__name h3_mini font-weight_medium">{{ $name }}</p>

        <div class="employee-card__contact-details contact-details">
            @if(isset($position))
                <p class="employee-card__position">{{ $position }}</p>
            @endif
            @if(isset($phone))
                <a href="tel:{{ $phone }}" class="employee-card__phone text-iconed link">
                    <span class="icon-phone"></span>
                    <span>{{ $phone }}</span>
                </a>
            @endif
            <a href="mailto:{{ $email }}" class="employee-card__email text-iconed link">
                <span class="icon-email"></span>
                <span>{{ $email }}</span>
            </a>
        </div>

    </div>

</div>