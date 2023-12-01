<div class="box-download-app">
    @if ($text = Arr::get($config, 'text'))
        <p class="font-xs color-grey-900 mb-25">{{ $text }}</p>
    @endif
    <div class="mb-25">
        <div class="d-flex">
            @if ($appStoreLogo = Arr::get($config, 'app_store_logo'))
                <a class="mr-10" href="{{ Arr::get($config, 'app_store_url') }}">
                    <img src="{{ RvMedia::getImageUrl($appStoreLogo) }}" alt="{{ __('App Store') }}" />
                </a>
            @endif
            @if ($googlePlayLogo = Arr::get($config, 'google_play_logo'))
                <a class="mr-10" href="{{ Arr::get($config, 'google_play_url') }}">
                    <img src="{{ RvMedia::getImageUrl($googlePlayLogo) }}" alt="{{ __('App Store') }}" />
                </a>
            @endif
        </div>
    </div>
</div>
