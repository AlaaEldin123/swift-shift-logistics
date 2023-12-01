<div class="box-swiper">
    <div class="swiper-container swiper-group-3-customers pb-50">
        <div class="swiper-wrapper">
            @foreach($posts as $post)
                <div class="swiper-slide">
                    {!! Theme::partial('blog.post.item-grid', compact('post')) !!}
                </div>
            @endforeach
        </div>
    </div>
</div>
