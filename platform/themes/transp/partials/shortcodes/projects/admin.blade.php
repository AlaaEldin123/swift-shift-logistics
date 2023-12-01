@php
    $fields = [
        'name' => [
            'type' => 'text',
            'title' => __('Name'),
        ],
        'description' => [
            'type' => 'textarea',
            'title' => __('Description'),
            'required' => false,
        ],
        'image' => [
            'type' => 'image',
            'title' => __('Icon'),
        ],
        'url' => [
            'type' => 'url',
            'title' => __('URL'),
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
        <textarea name="description" class="form-control" rows="3" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="button_label">{{ __('Button label') }}</label>
                <input type="text" name="button_label" value="{{ Arr::get($attributes, 'button_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="button_label">{{ __('Button URL') }}</label>
                <input type="text" name="button_url" value="{{ Arr::get($attributes, 'button_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background') }}</label>
        {!! Form::mediaImage('background', Arr::get($attributes, 'background')) !!}
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
                'style-3'  => __('Style :number', ['number' => 3]),
            ], Arr::get($attributes, 'style')) !!}
    </div>

    <label>{{ __('Projects') }}</label>

    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
</section>
