<section class="section mt-85 featured-post">
    <div class="container">
        @if ($categories->isNotEmpty())
            <div class="box-tags text-center">
                @foreach($categories as $category)
                    <a @class(['btn btn-tags btn-category', 'active' => $loop->first]) data-url="{{ route('public.ajax.posts', $category->id) }}">{{ $category->name }}</a>
                @endforeach
            </div>
        @endif

        <div class="position-relative">
            <div class="loading-featured-blog" style="display:none;">
                <div class="box-list-blog-loading position-absolute"></div>
                <div class="backdrop-box-list-blogs"></div>
            </div>
            <div class="box-list-blogs mt-50">
                {!! Theme::partial('blog.posts', ['posts' => $categories->first()->posts]) !!}
            </div>
        </div>
    </div>
</section>
