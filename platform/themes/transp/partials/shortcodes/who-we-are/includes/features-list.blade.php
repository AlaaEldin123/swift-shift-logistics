@foreach($tabs as $tab)
    <div class="col-lg-6 mb-30">
        <h6 class="feature-title font-md-bold color-grey-900" @if($tab['icon']) style="background-image: url({{ RvMedia::getImageUrl($tab['icon']) }})" @endif>
            @if ($tab['title'])
                {!! BaseHelper::clean($tab['title']) !!}
            @endif
        </h6>

        @if ($tab['description'])
            <p class="font-xs color-grey-900">{!! $tab['description'] !!}</p>
        @endif
    </div>
@endforeach
