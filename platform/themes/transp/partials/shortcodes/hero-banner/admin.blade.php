@php
    $fields = [
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
        ],
        'data' => [
            'type' => 'text',
            'title' => __('Data'),
        ],
        'unit' => [
            'type' => 'text',
            'title' => __('Unit'),
        ],
        'description' => [
            'type' => 'textarea',
            'title' => __('Description'),
        ],
        'image' => [
            'type' => 'image',
            'title' => __('Icon'),
        ],
        'label' => [
            'type' => 'text',
            'title' => __('Label'),
        ],
        'action' => [
            'type' => 'text',
            'title' => __('Action'),
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

    <div class="mb-3">
        <label class="form-label">{{ __('Background color') }}</label>
        {!! Form::customColor('background_color', Arr::get($attributes, 'background_color', '#E0F0F6'), ['class' => 'form-control']) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Banner image') }}</label>
        {!! Form::mediaImage('banner_image', Arr::get($attributes, 'banner_image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Shape icon') }}</label>
        {!! Form::mediaImage('shape_icon', Arr::get($attributes, 'shape_icon')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('YouTube video URL') }}</label>
        <input type="text" name="youtube_video_url" value="{{ Arr::get($attributes, 'youtube_video_url') }}" class="form-control" placeholder="{{ __('YouTube video URL') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button label') }}</label>
        <input type="text" name="button_label" value="{{ Arr::get($attributes, 'button_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button icon') }}</label>
        {!! Form::mediaImage('button_icon', Arr::get($attributes, 'button_icon')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button primary URL') }}</label>
        <input type="text" name="button_primary_url" value="{{ Arr::get($attributes, 'button_primary_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button primary label') }}</label>
        <input type="text" name="button_primary_label" value="{{ Arr::get($attributes, 'button_primary_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button secondary URL') }}</label>
        <input type="text" name="button_secondary_url" value="{{ Arr::get($attributes, 'button_secondary_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button secondary label') }}</label>
        <input type="text" name="button_secondary_label" value="{{ Arr::get($attributes, 'button_secondary_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('GooglePlay URL') }}</label>
        <input type="text" name="platform_google_play_url" value="{{ Arr::get($attributes, 'platform_google_play_url') }}" class="form-control" placeholder="{{ __('GooglePlay URL') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('GooglePlay logo') }}</label>
        {!! Form::mediaImage('platform_google_play_logo', Arr::get($attributes, 'platform_google_play_logo')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('AppleStore URL') }}</label>
        <input type="text" name="platform_apple_store_url" value="{{ Arr::get($attributes, 'platform_apple_store_url') }}" class="form-control" placeholder="{{ __('AppleStore URL') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('AppStore logo') }}</label>
        {!! Form::mediaImage('platform_apple_store_logo', Arr::get($attributes, 'platform_apple_store_logo')) !!}
    </div>

    <div style="border: 1px solid #cac6c6; padding: 15px 10px; margin-bottom: 20px;">
        <h6 class="form-label mb-10">{{ __('Box info') }}</h6>

        <div class="mb-3">
            <label class="form-label">{{ __('Title') }}</label>
            <input type="text" name="box_info_title" value="{{ Arr::get($attributes, 'box_info_title') }}" class="form-control" placeholder="{{ __('Title') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Description') }}</label>
            <input type="text" name="box_info_description" value="{{ Arr::get($attributes, 'box_info_description') }}" class="form-control" placeholder="{{ __('Description') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Button label') }}</label>
            <input type="text" name="box_info_button_label" value="{{ Arr::get($attributes, 'box_info_button_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Button URL') }}</label>
            <input type="text" name="box_info_button_url" value="{{ Arr::get($attributes, 'box_info_button_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect('style', [
            'style-1'  => __('Style :number', ['number' => 1]),
            'style-2'  => __('Style :number', ['number' => 2]),
            'style-3'  => __('Style :number', ['number' => 3]),
            'style-4'  => __('Style :number', ['number' => 4]),
            'style-5'  => __('Style :number', ['number' => 5]),
            'style-6'  => __('Style :number', ['number' => 6]),
        ], Arr::get($attributes, 'style')) !!}
    </div>

    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
</section>
