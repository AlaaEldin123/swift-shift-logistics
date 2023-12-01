<div class="section bg-map d-block">
    <div class="container">
        <div class="box-map">
            @php($address = $shortcode->address ?: theme_option('address'))
            <iframe src="https://maps.google.com/maps?q={{ addslashes($address) }}&output=embed" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="map-info">
                @if($logo = $shortcode->logo)
                    <img class="mb-25" src="{{ RvMedia::getImageUrl($logo) }}" alt="{{ theme_option('site_name') }}" />
                @endif
                @if($address)
                    <p class="color-grey-700 mb-25">{{ $address }}</p>
                @endif
                @if($phone = $shortcode->phone ?: theme_option('phone'))
                    <p class="color-grey-700 mb-10">
                        <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
                        </svg>
                        {{ __('Phone: :phone', ['phone' => $phone]) }}
                    </p>
                @endif
                @if($email = $shortcode->email ?: theme_option('contact_email'))
                    <p class="color-grey-700 mb-30">
                        <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                        </svg>
                        {{ __('Email: :email', ['email' => $email]) }}
                    </p>
                @endif
                @if($openingHours = $shortcode->opening_hours)
                    <div class="line-border mb-25"></div>
                    <p class="color-grey-700 font-md-bold">{{ $openingHours }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
