<div class="mb-50">
    <section class="section">
        <div class="container">
            <div class="box-pageheader-1 box-pageheader-services text-center">
                <span class="btn btn-tag wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">{{ __('Our Services') }}</span>
                <h2 class="color-brand-2 mt-15 mb-10 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    {!! BaseHelper::clean($service->title) !!}
                </h2>
                <p class="font-md color-grey-900 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                    {!! BaseHelper::clean($service->description) !!}
                </p>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="row">
                @if($firstImage = $service->images[0])
                    <div class="col-lg-6">
                        <img src="{{ RvMedia::getImageUrl($firstImage) }}" alt="{{ $service->title }}">
                    </div>
                @endif

                @if($secondImage = $service->images[1])
                    <div class="col-lg-6 position-relative">
                        <img src="{{ RvMedia::getImageUrl($firstImage) }}" alt="{{ $service->title }}">
                    </div>
                @endif
            </div>
        </div>
    </div>

    @php
    $content = $service->content;

    $blockContents = explode('<shortcode', $content);
    for($i = 1; $i < count($blockContents); $i++) {
        $blockContents[$i] = '<shortcode' . $blockContents[$i];
    }
    @endphp

    <section class="section mt-50">
        <div class="container">
            <div class="content-detail">
                {!! BaseHelper::clean($blockContents[0]) !!}
            </div>
        </div>
    </section>

    @foreach($blockContents as $blockContent)
        @if($loop->index > 0)
            {!! BaseHelper::clean($blockContent) !!}
        @endif
    @endforeach
</div>
