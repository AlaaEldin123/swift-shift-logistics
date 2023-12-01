<div class="header-contact">
    @foreach(range(1, 2) as $i)
        @php($text = Arr::get($config, "text_block_$i"))
        <div @class(["box-header-contact-$i", 'ms-4' => ! $loop->first])>
            <div class="icon-contact">
                <img alt="{{ $text }}" src="{{ RvMedia::getImageUrl(Arr::get($config, "icon_block_$i"), default: RvMedia::getDefaultImage()) }}" />
            </div>
            <div class="info-contact">{!! BaseHelper::clean($text) !!}</div>
        </div>
    @endforeach
</div>
