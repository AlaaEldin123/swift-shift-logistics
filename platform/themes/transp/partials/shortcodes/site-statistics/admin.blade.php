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
    ];
@endphp

<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Highlight text') }}</label>
        <input type="text" name="highlight_text" value="{{ Arr::get($attributes, 'highlight_text') }}" class="form-control" placeholder="{{ __(' Highlight text') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Subtitle') }}</label>
        <input type="text" name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control" placeholder="{{ __('Subtitle') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Image') }}</label>
        {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background icon') }}</label>
        {!! Form::mediaImage('background_icon', Arr::get($attributes, 'background_icon')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Mini icon bottom') }}</label>
        {!! Form::mediaImage('mini_icon_bottom', Arr::get($attributes, 'mini_icon_bottom')) !!}
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
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect('style', [
                'style-1'  => __('Style :number', ['number' => 1]),
                'style-2'  => __('Style :number', ['number' => 2]),
            ], Arr::get($attributes, 'style')) !!}
    </div>

    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
</section>
