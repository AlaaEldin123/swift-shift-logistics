<div class="card-blog-grid card-blog-grid-2 hover-up">
    <div class="card-image">
        <a href="{{ $post->url }}"><img src="{{ RvMedia::getImageUrl($post->image, 'thumb', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}"></a>
        <a class="btn btn-border-brand-1 mr-15" href="{{ $post->firstCategory->url }}">{{ $post->firstCategory->name }}</a>
    </div>
    <div class="card-info">
        <a href="{{ $post->url }}">
            <h5 class="color-brand-2">{{ $post->name }}</h5>
        </a>
        <p class="font-sm color-grey-500 mt-20 description-post-blog-custom">
            {{ $post->description }}
        </p>
        <div class="line-border"></div>
        <div class="mt-5 d-flex align-items-center justify-content-between pt-0">
            <a class="btn btn-link font-sm color-brand-2" href="{{ $post->url }}">
                {{ __('View Details') }}
                <span>
                    <svg class="icon-16" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </span>
            </a>
            <span class="date-post font-sm color-grey-700">{{ $post->created_at->translatedFormat('Y M d') }}</span></div>
    </div>
</div>
