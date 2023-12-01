<div class="line-border mt-90"></div>
<div>
    <div class="container w-50 pt-30 pb-20 mb-25 text-center">
        <h2 class="color-brand-2 mb-25">{{ __('Search Results') }}</h2>
        <p class="font-md-color-grey-900">
            @php($keyword = BaseHelper::stringify(request()->query('q')))
            {!! BaseHelper::clean(__('Search result for: ":query"', ['query' => sprintf('<span title="%s">%s</span>', $keyword, Str::limit($keyword, 150))])) !!}
        </p>
    </div>

    @if(count($posts) !== 0)
        <div class="container">
            <div class="position-relative">
                {!! Theme::partial('blog.posts', compact('posts')) !!}
            </div>
        </div>

        <div class="text-center mt-40">
            {!! $posts->withQueryString()->links(Theme::getThemeNamespace('partials.pagination')) !!}
        </div>
    @else
        <p class="mb-50 text-center text-muted">{{ __('There are no posts found with your queries.') }}</p>
    @endif
</div>
