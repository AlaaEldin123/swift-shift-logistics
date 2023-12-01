@foreach ($tabs as $tab)
    <div class="col-lg-6 mb-30">
        @if ($tab['title'])
            <h6 class="chart-title font-md-bold color-grey-900" @if ($tab['image']) style="background-image: url({{ RvMedia::getImageUrl($tab['image'])}})" @endif >
                {!! BaseHelper::clean($tab['title']) !!}
            </h6>
        @endif

        @if ($tab['description'])
            <p class="font-xs color-grey-900">{!! BaseHelper::clean($tab['description']) !!}</p>
        @endif
    </div>
@endforeach
