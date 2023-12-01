<section class="section mt-70">
    <div class="container">
        {!! Theme::partial('blog.posts', compact('posts')) !!}
    </div>
    <div class="text-center mt-40">
        {!! $posts->withQueryString()->links(Theme::getThemeNamespace('partials.pagination')) !!}
    </div>
</section>
