<div class="box-bar bg-grey-900">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-sm-5 col-4">
                @if (($phone = theme_option('phone')))
                    <a class="phone-icon mr-45" href="tel:{{ $phone }}">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                            ></path>
                        </svg>
                        {{ $phone }}
                        @if($subtextPhone = theme_option('subtext_phone'))
                            <span>( {!! BaseHelper::clean($subtextPhone) !!} )</span>
                        @endif
                    </a>
                @endif

                @if ($email = theme_option('contact_email'))
                    <a class="email-icon" href="mailto:{{ $email }}">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                            ></path>
                        </svg>
                        {{ $email }}
                    </a>
                @endif
            </div>
            <div class="col-lg-5 col-md-4 col-sm-7 col-8 text-end">
                @if($socialLinks = json_decode(theme_option('social_links')))
                    @foreach($socialLinks as $socialLink)
                        @php($socialLink = collect($socialLink)->pluck('value', 'key'))
                        <a
                            href="{{ $socialLink->get('url') }}"
                            class="icon-socials icon-footer"
                            style="background-image: url('{{ RvMedia::getImageUrl($socialLink->get('icon')) }}')"
                            target="_blank"
                            rel="noopener noreferrer"
                        ></a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
