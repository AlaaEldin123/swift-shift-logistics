<div class="cardGrid">
    @if ($image = $service->thumbnail)
        <a href="{{ $service->url }}">
            <div class="cardImage">
                <img src="{{ RvMedia::getImageUrl($image,'thumb') }}" alt="{{ $service->title }}">
            </div>
        </a>
    @endif

    <div class="cardInfo">
        <a href="{{ $service->url }}" >
            <h5 class="color-brand-2 mb-10">{{ $service->title }}</h5>
        </a>
        <p class="font-xs color-grey-500">
            {!! BaseHelper::clean(Str::limit($service->description, 120)) !!}
        </p>
        <div class="box-button mt-30">
            <a class="btn btn-link font-sm color-brand-2" href="{{ $service->url }}">
                {{ __('View Details') }}
                <span>
                    <svg class="icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</div>
