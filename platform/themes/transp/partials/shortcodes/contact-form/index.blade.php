<section class="section mt-40 mb-90">
    <div class="container position-relative">
        <div class="box-cover-contactform">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="box-contactform-left">
                        @if ($title = $shortcode->title)
                            <h3 class="color-brand-2 mb-15">{!! BaseHelper::clean($title) !!}</h3>
                        @endif

                        @if ($description = $shortcode->description)
                            <p class="font-md color-grey-900 mb-50">{!! BaseHelper::clean($description) !!}</p>
                        @endif
                        {!! Form::open(['route' => 'public.send.contact', 'class' => 'contact-form cons-contact-form']) !!}
                        {!! apply_filters('pre_contact_form', null) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control" type="text" name="name" placeholder="{{ __('Your name') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control" type="email" name="email" placeholder="{{ __('Your email') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control" type="text" name="phone" placeholder="{{ __('Phone number') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control" type="text" name="company" placeholder="{{ __('Company') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input class="form-control" type="text" name="subject" placeholder="{{ __('Subject') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea class="form-control" name="content" placeholder="{{ __('Message / Note') }}" rows="5"></textarea>
                                </div>
                            </div>
                            @if (is_plugin_active('captcha'))
                                @if (setting('enable_captcha'))
                                    <div class="col-12">
                                        <div class="mb-3">
                                            {!! Captcha::display() !!}
                                        </div>
                                    </div>
                                @endif

                                @if (setting('enable_math_captcha_for_contact_form', 0))
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="math-group">{{ app('math-captcha')->label() }}</label>
                                            {!! app('math-captcha')->input(['class' => 'form-control', 'id' => 'math-group', 'placeholder' => app('math-captcha')->getMathLabelOnly() . ' = ?']) !!}
                                        </div>
                                    </div>
                                @endif
                            @endif
                            {!! apply_filters('after_contact_form', null) !!}
                            <div class="col-span-12">
                                <div class="contact-form-group mt-4">
                                    <div class="contact-message contact-success-message" style="display: none"></div>
                                    <div class="contact-message contact-error-message" style="display: none"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-brand-1-big" type="submit">{{ __('Submit Now') }}</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 position-relative">
                    <div class="box-contactform-right">
                        @if($subtitle = $shortcode->subtitle)
                            <h5 class="color-brand-2 mb-35">{!! BaseHelper::clean($subtitle) !!}</h5>
                        @endif
                        <div class="map-info">
                            @if($logo = theme_option('logo'))
                                <img class="mb-25" src="{{ RvMedia::getImageUrl($logo) }}" alt="logo">
                            @endif

                            @if($shortcode->address || theme_option('address'))
                                <p class="color-grey-700 mb-25">{!! BaseHelper::clean($shortcode->address ?: theme_option('address')) !!}</p>
                            @endif

                            @if($shortcode->phone || theme_option('phone'))
                                <p class="color-grey-700 mb-10">
                                    <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path>
                                    </svg>
                                    {!! BaseHelper::clean(__('Phone: :phone', ['phone' => $shortcode->phone ?: theme_option('phone')])) !!}
                                </p>
                            @endif

                            @if($shortcode->email || theme_option('contact_email'))
                                <p class="color-grey-700 mb-30">
                                    <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
                                    </svg>
                                    {!! BaseHelper::clean(__('Email: :email', ['email' =>  $shortcode->email ?: theme_option('contact_email')])) !!}
                                </p>
                            @endif
                            <div class="line-border mb-25"></div>
                            @if($openTime = $shortcode->open_time)
                                <p class="color-grey-700 font-md-bold">{!! BaseHelper::clean($openTime) !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
