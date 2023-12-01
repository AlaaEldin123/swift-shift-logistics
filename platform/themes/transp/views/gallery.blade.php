@php
    Theme::set('pageTitle', $gallery->name);
    Theme::set('pageDescription', $gallery->description);
    Theme::set('enableFavicon', false);
@endphp

@if (function_exists('get_galleries'))
    <section class="section page-intro bg-cover">
        {!! Theme::partial('breadcrumb') !!}
    </section>
    <div class="container mt-50 mb-50">
        <div class="row">
            <article class="post post--single">
                <div class="post__content">
                    <div class="row" id="list-photo">
                        @foreach (gallery_meta_data($gallery) as $image)
                            @if ($image)
                                <div class="col-6 col-md-2 mt-10" data-src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" data-sub-html="{{ BaseHelper::clean(Arr::get($image, 'description')) }}">
                                    <div class="photo-item">
                                        <div class="thumb">
                                            <a href="{{ BaseHelper::clean(Arr::get($image, 'description')) }}">
                                                <img src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" alt="{{ BaseHelper::clean(Arr::get($image, 'description')) }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </article>
        </div>
    </div>
@endif
