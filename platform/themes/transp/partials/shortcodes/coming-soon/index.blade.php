<section class="section box-comingsoon-cover">
    <div class="container box-comingsoon">
        <div class="row align-items-center d-flex justify-content-center">
            <div class="col-lg-5 mb-30">
                <div class="box-comingsoon-left">
                    @if ($isOpeningTime)
                        <div class="box-count box-count-square mb-45">
                            <div class="deals-countdown" data-countdown="{{ $shortcode->time }}"></div>
                        </div>
                    @endif

                    @if ($title = $shortcode->title)
                        <h3 class="color-brand-2">
                            {!! BaseHelper::clean($title) !!}
                        </h3>
                    @endif

                    <div class="form-trackparcel">
                        <form method="POST" action="{{ route('public.newsletter.subscribe') }}" class="newsletter-form">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" type="email" name="email" placeholder="{{ __('Enter your email') }}"/>
                                <button class="btn btn-brand-1 btn-track" type="submit">{{ __('Notify Me') }}</button>
                            </div>
                        </form>
                        @if (setting('enable_captcha') && is_plugin_active('captcha'))
                            <div class="mb-3">
                                {!! Captcha::display() !!}
                            </div>
                        @endif
                    </div>

                    @if ($phone = $shortcode->phone ?: theme_option('phone'))
                        <div class="mt-30">
                            <a class="phone-icon" href="tel:{{ $phone }}">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                                    ></path>
                                </svg>
                                {!! BaseHelper::clean(__("Phone: $phone")) !!}
                            </a>
                        </div>
                    @endif

                    @if ($email = $shortcode->email ?: theme_option('contact_email'))
                        <div class="mt-10">
                            <a class="email-icon" href="mailto:{{ $email }}">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                                    ></path>
                                </svg>
                                {!! BaseHelper::clean($email) !!}
                            </a>
                        </div>
                    @endif

                    @if ($socialLinks = json_decode(theme_option('social_links')))
                        <div class="mt-30">
                            <div class="mt-15">
                                @foreach($socialLinks as $socialLink)
                                    @php($socialLink = collect($socialLink)->pluck('value', 'key'))
                                    <a
                                        href="{{ $socialLink->get('url') }}"
                                        class="icon-socials icon-socials-coming-soon"
                                        style="background-image: url('{{ RvMedia::getImageUrl($socialLink->get('icon')) }}')"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    ></a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            @if ($image = $shortcode->image)
                <div class="col-lg-7 mb-30">
                    <div class="box-comingsoon-right">
                        <img src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $shortcode->title }}"/>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
