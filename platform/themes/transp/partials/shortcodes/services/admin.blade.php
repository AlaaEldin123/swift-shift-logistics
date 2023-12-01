@php
    $fields = [
        'name' => [
            'title' => __('Name'),
            'required' => true
        ],
        'image' => [
            'type' => 'image',
            'title' => __('Logo'),
            'required' => true
        ],
        'description' => [
            'type' => 'textarea',
            'title' => __('Description'),
            'required' => true
        ],
        'link' => [
            'type' => 'text',
            'title' => __('URL'),
            'required' => false
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

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Button label') }}</label>
                <input type="text" name="button_label" value="{{ Arr::get($attributes, 'button_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Button link') }}</label>
                <input type="text" name="button_link" value="{{ Arr::get($attributes, 'button_link') }}" class="form-control" placeholder="{{ __('Button link') }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Background') }}</label>
                {!! Form::mediaImage('background', Arr::get($attributes, 'background')) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Left shape image') }}</label>
                {!! Form::mediaImage('left_shape_image', Arr::get($attributes, 'left_shape_image')) !!}
            </div>
        </div>
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
