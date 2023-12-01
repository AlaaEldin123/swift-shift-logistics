@php
    $fields = [
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
        ],
        'description' => [
            'type' => 'textarea',
            'title' => __('Description'),
        ],
        'image' => [
            'type' => 'image',
            'title' => __('Icon'),
        ],
    ];
@endphp

<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Description') }}</label>
        <textarea name="description" class="form-control" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background color') }}</label>
        {!! Form::customColor('background_color', Arr::get($attributes, 'background_color', theme_option('secondary_color', '#034460')), ['class' => 'form-control']) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Title Direction') }}</label>
        {!! Form::customSelect('title_direction', [
            'start'  => __(':direction', ['direction' => 'Left']),
            'center'  => __(':direction', ['direction' => 'Center']),
            'end'  => __(':direction', ['direction' => 'Right']),
        ], Arr::get($attributes, 'title_direction')) !!}
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

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">{{ __('Icon') }}</label>
                {!! Form::mediaImage('icon', Arr::get($attributes, 'icon')) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">{{ __('Inner background') }}</label>
                {!! Form::mediaImage('inner_background', Arr::get($attributes, 'inner_background')) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">{{ __('Left background') }}</label>
                {!! Form::mediaImage('left_background', Arr::get($attributes, 'left_background')) !!}
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Left title') }}</label>
        <input type="text" name="left_title" value="{{ Arr::get($attributes, 'left_title') }}" class="form-control" placeholder="{{ __('Left title') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Left description') }}</label>
        <textarea name="left_description" class="form-control" placeholder="{{ __('Left description') }}">{{ Arr::get($attributes, 'left_description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Left icon') }}</label>
        {!! Form::mediaImage('left_icon', Arr::get($attributes, 'left_icon')) !!}
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
