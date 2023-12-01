<div class="mb-50">
    <section class="section">
        <div class="container">
            <div class="content-detail">
                <div class="box-pageheader-1 box-pageheader-services text-start pb-30">
                    @foreach ($post->categories as $category)
                        <a class="btn mr-10 mb-10 btn-tag" href="{{ $category->url }}">{{ $category->name }}</a>
                    @endforeach
                    <h2 class="color-brand-2 mt-15 mb-25">{{ $post->name }}</h2>
                    <div class="row align-items-center">
                        @if ($author = $post->author)
                            <div class="col-lg-6 mb-30">
                                <div class="box-author">
                                    <a>
                                        <img src="{{ $author->avatar_url }}" alt="{{ $author->name }}">
                                    </a>
                                    <div class="author-info">
                                        <a><span class="font-xl-bold color-brand-2 author-name">{{ $author->name }}</span></a>
                                        <span class="font-sm color-grey-500 department">{{ $post->created_at->translatedFormat('M d, Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-lg-6 mb-30">
                            <div class="d-flex justify-content-start justify-content-lg-end">
                                <span class="font-xs color-grey-700 mr-30">{{ __(':count views', ['count' => number_format($post->views)]) }}</span>
                                <span class="font-xs color-grey-700 mr-15">{{ __('Share') }}</span>
                                <div class="box-socials">
                                    <a class="mr-5" href="https://twitter.com/intent/tweet?url={{ urlencode($post->url) }}&text={{ strip_tags($post->description) }}">
                                        <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#818692" viewbox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                        </svg>
                                    </a>

                                    <a class="mr-5" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($post->url) }}">
                                        <svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.08433 14V7.61441H10.2268L10.5483 5.12509H8.08433V3.53603C8.08433 2.81554 8.28358 2.32453 9.31793 2.32453L10.635 2.32399V0.097461C10.4072 0.0678617 9.62539 0 8.71539 0C6.81517 0 5.51425 1.15988 5.51425 3.28949V5.12509H3.36523V7.61441H5.51425V14H8.08433Z" fill=""></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-10">
                    @if ($image = $post->image)
                        <img class="w-100" src="{{ RvMedia::getImageUrl($image) }}" alt="{{ $post->name }}">
                    @endif
                </div>
            </div>
        </div>
    </div>
    <section class="section mt-50">
        <div class="container">
            <div class="ck-content font-md content-detail">
                @if($description = $post->description)
                    <div class="container">
                        <strong class="font-md-bold color-grey-900 mb-25 d-block">
                            {!! BaseHelper::clean($description) !!}
                        </strong>
                    </div>
                @endif

                @if($content = $post->content)
                    {!! BaseHelper::clean($content) !!}
                @endif

                @if ($post->tags->isNotEmpty())
                    <div>
                        <div class="line-border"></div>
                        @foreach($post->tags as $tag)
                            <a class="btn mr-10 mb-10 btn-tag" href="{{ $tag->url }}">#{{ $tag->name }}</a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
    <div class="line-border"></div>
    <section class="section mt-110">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <h2 class="title-favicon mb-20">{{ __('Recent Posts') }}</h2>
                    <p class="font-md color-grey-700">{{ __('The latest information about shipping services and our promotions') }}</p>
                </div>
                <div class="col-lg-4 col-md-4 text-end">
                    <div class="box-button-sliders">
                        <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-customers" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-5d708c58e945f96a">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                            </svg>
                        </div>
                        <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-customers" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-5d708c58e945f96a">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                {!! Theme::partial('blog.posts-slider', ['posts' => get_recent_posts(4)]) !!}
            </div>
        </div>
    </section>
</div>
