<section class="section d-block">
    <div class="box-swiper">
        <div class="swiper-container swiper-group-1 swiper-banner-1">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="banner-1" style="background-image:url({{ RvMedia::getImageUrl($slider->image) }})">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        @if($subtitle = $slider->getMetaData('subtitle', true))
                                            <p class="font-md color-white mb-15">
                                                {!! BaseHelper::clean($subtitle) !!}
                                            </p>
                                        @endif
                                        <h1 class="color-white mb-25">
                                            {!! BaseHelper::clean($slider->title) !!}
                                        </h1>
                                        @if($slider->description)
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p class="font-md color-white mb-20">{{ $slider->description }}</p>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="box-button mt-30">
                                            @if($buttonLabel = $slider->getMetaData('button_label', true))
                                                <a class="btn btn-brand-1-big hover-up mr-40" href="{{ $slider->link }}">
                                                    {{ $buttonLabel }}
                                                </a>
                                            @endif
                                            @if($linkLabel = $slider->getMetaData('link_label', true))
                                                <a class="btn btn-play popup-youtube hover-up" href="{{ $slider->getMetaData('link_url', true) }}">
                                                    @if($icon = $slider->getMetaData('link_icon', true))
                                                        <img src="{{ RvMedia::getImageUrl($icon) }}" alt="{{ $linkLabel }}" />
                                                    @endif
                                                    {{ $linkLabel }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-pagination-banner"></div>
        </div>
    </div>
</section>
