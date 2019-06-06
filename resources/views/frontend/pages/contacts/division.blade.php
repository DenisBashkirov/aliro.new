<section class="contacts-division section-margin_large">

    <div class="section__header section__header_linked">
        <h2 class="h2_small font-weight_extrabold">{{ $title }}</h2>
        <a href="#" class="link link_arrowed link_large visible_md">
            <span>{{ $link_text }}</span>
            <span class="icon-arrow"></span>
        </a>
    </div>

    <div class="contacts-division__body elem-dealing elem-dealing_tiny">

        <div class="contacts-division__contact-details font-weight_medium">

            <div class="contacts-division__address text-iconed">
                <span class="icon-location text_red"></span>
                <span>{{ $address }}</span>
            </div>

            @if(isset($phone))
                <a href="tel:+{{ $phone }}" class="contacts-division__address text-iconed link">
                    <span class="icon-phone text_red"></span>
                    <span>{{ $phone }}</span>
                </a>
            @endif

            <a href="#" class="link link_arrowed link_large hidden_md">
                <span>{{ $link_text }}</span>
                <span class="icon-arrow"></span>
            </a>

        </div>

        @if(isset($ymap_id))
            <div id="{{ $ymap_id }}" class="contacts-division__map ymap"></div>
        @endif

        <div class="contacts-division__departments">
            {{ $departments }}
        </div>

    </div>

</section>