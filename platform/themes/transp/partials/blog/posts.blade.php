@php
    $postStyle = theme_option('blog_post_style', 'grid');
@endphp

<div class="row">
    @foreach($posts as $post)
        <div
            @class([
                'col-xxl-6 col-xl-12 col-lg-12' => $postStyle === 'list',
                'col-lg-4' => $postStyle === 'grid',
            ])
        >
            {!! Theme::partial("blog.post.item-$postStyle", compact('post')) !!}
        </div>
    @endforeach
</div>
