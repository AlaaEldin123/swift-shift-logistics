<section class="section mt-55 bg-1 position-relative pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                @if ($badgeText = $shortcode->badge_text)
                    <span class="btn btn-tag">{!! BaseHelper::clean($badgeText) !!}</span>
                @endif
                @if ($title = $shortcode->title)
                    <h3 class="color-grey-900 mb-20 mt-15">
                        {!! BaseHelper::clean($title) !!}
                    </h3>
                @endif
                @if ($description = $shortcode->description)
                    <p class="font-md color-grey-900 mb-40">
                        {!! BaseHelper::clean($description) !!}
                    </p>
                @endif
                <div class="row">
                    {!! Theme::partial('shortcodes.information-2.includes.features-list', compact('tabs')) !!}
                </div>
                <div class="mt-20">
                    @if($buttonLabel = $shortcode->button_label)
                        <a class="btn btn-brand-2 mr-20" href="{{ $shortcode->button_url }}">
                            {!! BaseHelper::clean($buttonLabel) !!}
                        </a>
                    @endif
                    @if($linkLabel = $shortcode->link_label)
                        <a class="btn btn-link-medium" href="{{ $shortcode->link_url }}">
                            {!! BaseHelper::clean($linkLabel) !!}
                            <svg class="icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div
        class="box-image-touch"
        style="
            --left-background: url('{{ RvMedia::getImageUrl($shortcode->left_background) }}');
            --right-background: url('{{ RvMedia::getImageUrl($shortcode->right_background) }}');
        "
    ></div>
</section>
