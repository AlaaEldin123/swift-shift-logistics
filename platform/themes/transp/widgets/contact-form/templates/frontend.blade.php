@php
    $bgColor = $config['background_color'] ?: '#ffe799'
@endphp

<div class="section bg-map d-block"
     style="
        @if($config['shape_icon_top'])
            --shape-1: url('{{ RvMedia::getImageUrl($config['shape_icon_top']) }}');
        @endif
        @if($config['shape_icon_bottom'])
            --shape-2: url('{{ RvMedia::getImageUrl($config['shape_icon_bottom']) }}');
        @endif
        --bg-color: {{ $bgColor }}
    "
>
    <div class="container">
        <div class="box-newsletter">
            @if ($title = $config['title'])
                <h3 class="color-brand-2 mb-20">{!! BaseHelper::clean($title) !!}</h3>
            @endif
            <div class="row">
                <div class="col-lg-5 mb-30">
                    <div class="form-newsletter">
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
                <div class="col-lg-7 mb-30">
                    <div class="d-flex box-newsletter-right">
                       @if($address = theme_option('address'))
                            <div class="box-map-2">
                                <iframe src="https://www.google.com/maps?q={{ $address }}&output=embed" height="242" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                       @endif
                        <ul class="list-info-footer">
                            @if ($address)
                                <li>
                                    <div class="cardImage">
                                    <span class="icon-brand-1">
                                        <img src="{{ Theme::asset()->url('images/contact-form/icons/address.svg') }}" alt="{{ __('Address') }}">
                                    </span>
                                    </div>
                                    <div class="cardInfo">
                                        <h6 class="font-sm-bold color-grey-900">{{ __('Address') }}</h6>
                                        <p class="font-sm color-grey-900">{!! BaseHelper::clean($address) !!}</p>
                                    </div>
                                </li>
                            @endif

                            @if ($email = theme_option('contact_email'))
                                <li>
                                    <div class="cardImage">
                                    <span class="icon-brand-1">
                                        <img src="{{ Theme::asset()->url('images/contact-form/icons/email.svg') }}" alt="{{ __('Email') }}">
                                    </span>
                                    </div>
                                    <div class="cardInfo">
                                        <h6 class="font-sm-bold color-grey-900">{{ __('Email') }}</h6>
                                        <a href="mailto:{{ $email }}" class="font-sm color-grey-900">{!! BaseHelper::clean($email) !!}</a>
                                    </div>
                                </li>
                            @endif

                            @if ($phoneNumber = theme_option('phone'))
                                <li>
                                    <div class="cardImage">
                                    <span class="icon-brand-1">
                                        <img src="{{ Theme::asset()->url('images/contact-form/icons/phone.svg') }}" alt="{{ __('Phone') }}">
                                    </span>
                                    </div>
                                    <div class="cardInfo">
                                        <h6 class="font-sm-bold color-grey-900">{{ __('Telephone') }}</h6>
                                        <a href="tel:{{ $phoneNumber }}" class="font-sm color-grey-900"> {!! BaseHelper::clean($phoneNumber) !!} </a>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
