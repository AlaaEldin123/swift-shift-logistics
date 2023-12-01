<section class="section mt-50">
    <div class="text-center">
        <h2 class="color-brand-2 mb-65 mt-15">{{ $category->name }}</h2>
    </div>
    <div class="container">
        {!! Theme::partial('blog.posts', compact('posts')) !!}
    </div>
</section>
