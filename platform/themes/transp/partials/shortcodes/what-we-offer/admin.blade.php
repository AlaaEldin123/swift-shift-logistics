@php
    $fields = [
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
        ],
        'url' => [
            'type' => 'text',
            'title' => __('URL'),
        ],
        'image' => [
            'type' => 'image',
            'title' => __('Image'),
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

    <div class="mb-3">
        <label class="form-label">{{ __('Button label') }}</label>
        <input type="text" name="button_label" value="{{ Arr::get($attributes, 'button_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button URL') }}</label>
        <input type="text" name="button_url" value="{{ Arr::get($attributes, 'button_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button icon') }}</label>
        {!! Form::mediaImage('button_icon', Arr::get($attributes, 'button_icon')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Prefix title icon') }}</label>
        {!! Form::mediaImage('prefix_title_icon', Arr::get($attributes, 'prefix_title_icon')) !!}
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
