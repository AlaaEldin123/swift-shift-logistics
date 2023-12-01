@php
    $fields = [
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
        ],
        'icon' => [
            'type' => 'image',
            'title' => __('Icon'),
        ],
        'description' => [
            'type' => 'textarea',
            'title' => __('Description'),
        ],
    ];
@endphp

<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Subtitle') }}</label>
        <input type="text" name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control" placeholder="{{ __('Subtitle') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Description') }}</label>
        <textarea name="description" class="form-control" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Icon') }}</label>
                {!! Form::mediaImage('icon', Arr::get($attributes, 'icon')) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Left background') }}</label>
                {!! Form::mediaImage('left_background', Arr::get($attributes, 'left_background')) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Shape image horizontal') }}</label>
                {!! Form::mediaImage('shape_image_horizontal', Arr::get($attributes, 'shape_image_horizontal')) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Shape image vertical') }}</label>
                {!! Form::mediaImage('shape_image_vertical', Arr::get($attributes, 'shape_image_vertical')) !!}
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Right title') }}</label>
        <input type="text" name="right_title" value="{{ Arr::get($attributes, 'right_title') }}" class="form-control" placeholder="{{ __('Right title') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Right description') }}</label>
        <textarea name="right_description" class="form-control" rows="3" placeholder="{{ __('Right description') }}">{{ Arr::get($attributes, 'right_description') }}</textarea>
    </div>

    <div class="row">
        @foreach(range(1, 10) as $i)
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">{{ __("Feature $i") }}</label>
                    <input type="text" name="{{ "feature_$i" }}" value="{{ Arr::get($attributes, "feature_$i") }}" class="form-control" placeholder="{{ __("Feature $i") }}">
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        @foreach(range(1, 2) as $i)
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">{{ __("Button label $i") }}</label>
                    <input type="text" name="{{ "button_label_$i" }}" value="{{ Arr::get($attributes, "button_label_$i") }}" class="form-control" placeholder="{{ __("Button label $i") }}">
                    <small class="form-text text-muted">{{ __("This will be shown when the button image is not available") }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">{{ __("Button URL $i") }}</label>
                    <input type="text" name="{{ "button_url_$i" }}" value="{{ Arr::get($attributes, "button_url_$i") }}" class="form-control" placeholder="{{ __("Button url $i") }}">
                </div>
            </div>

            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">{{ __("Button image $i") }}</label>
                    {{ Form::mediaImage("button_image_$i", Arr::get($attributes, "button_image_$i")) }}
                </div>
            </div>
        @endforeach
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect('style', [
                'style-1'  => __('Style :number', ['number' => 1]),
                'style-2'  => __('Style :number', ['number' => 2]),
            ], Arr::get($attributes, 'style')) !!}
    </div>

    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
</section>
