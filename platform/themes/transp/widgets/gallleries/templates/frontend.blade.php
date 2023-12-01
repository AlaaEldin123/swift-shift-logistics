@if(is_plugin_active('gallery') && $gallery)
    <div class="col-lg-3 width-20 mb-30">
        <a href="{{ route('public.galleries') }}">
            <h5 class="mb-10 color-brand-1">{!! BaseHelper::clean(Arr::get($config, 'name')) !!}</h5>
            <div class="galleries-footer">
                <ul class="list-imgs">
                    @foreach (gallery_meta_data($gallery) as $image)
                        <li>
                            <img src="{{ RvMedia::getImageUrl($image['img']) }}" alt="{{ $image['description'] }}"/>
                        </li>
                    @endforeach
                </ul>
            </div>
        </a>
    </div>
@endif
