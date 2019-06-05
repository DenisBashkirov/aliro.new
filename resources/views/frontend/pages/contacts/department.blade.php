<div class="contacts-department {{ $staffed ? 'contacts-department_staffed' : 'contacts-department_unstaffed' }}">

    @if(isset($title))
        <div class="contacts-department__title">
            <h3 class="font-weight_semibold">{{ $title }}</h3>
        </div>
    @endif

    @if(isset($staff))
        <div class="contacts-department__staff md-overflow-hidden">
            <div class="contacts-department__staff-swiper-container swiper-container">

                <div class="swiper-wrapper">

                    {{ $staff }}

                </div>

                <div class="swiper-scrollbar"></div>

            </div>
        </div>
    @endif

    @if(isset($phone) || isset($email))
        <div class="contacts-department__contact-details contact-details">
            @if(isset($phone))
                <a href="tel:{{ $phone }}" class="contacts-department__phone text-iconed link">
                    <span class="icon-phone"></span>
                    <span>{{ $phone }}</span>
                </a>
            @endif
            @if(isset($email))
                <a href="mailto:{{ $email }}" class="contacts-department__email text-iconed link">
                    <span class="icon-email"></span>
                    <span>{{ $email }}</span>
                </a>
            @endif
        </div>
    @endif

</div>