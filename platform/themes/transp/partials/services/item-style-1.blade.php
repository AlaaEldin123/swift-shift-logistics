<div class="cardService">
    <div class="cardImage">
        <a href="{{ $service->url }}">
            @if ($thumbnail = $service->thumbnail)
                <img src="{{ RvMedia::getImageUrl($thumbnail) }}" alt="{{ $service->title }}">
            @endif
        </a>
    </div>
    <div class="cardInfo">
        <a href="{{ $service->url }}">
            @if ($categoryIcon = $service->category->getMetaData('icon', true))
                <img src="{{ RvMedia::getImageUrl($categoryIcon) }}" alt="{{ $service->title }}">
            @endif

            <h6 class="color-brand-2">{{ $service->title }}</h6>

            <p class="font-xs color-grey-900">{!! BaseHelper::clean($service->description) !!}</p>
        </a>
    </div>
</div>
