@php
    $fields = [
        'image' => [
            'type' => 'image',
            'title' => __('Logo'),
        ],
        'number' => [
            'type' => 'text',
            'title' => __('Number'),
        ],
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
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
        <label class="form-label">{{ __('Description') }}</label>
        <textarea name="description" class="form-control" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-control-sm">{{ __('Background') }}</label>
        {{ Form::mediaImage('background', Arr::get($attributes, 'background')) }}
    </div>

    <div class="mb-3">
        <label class="form-control-sm">{{ __('Background color') }}</label>
        {{ Form::customColor('background_color', Arr::get($attributes, 'background_color', '#E0F0F6')) }}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect('style', [
            'style-1'  => __('Style :number', ['number' => 1]),
            'style-2'  => __('Style :number', ['number' => 2]),
            'style-3'  => __('Style :number', ['number' => 3]),
            'style-4'  => __('Style :number', ['number' => 4]),
            'style-5'  => __('Style :number', ['number' => 5]),
        ], Arr::get($attributes, 'style')) !!}
    </div>

    <div class="mb-3">
        <label for="link_label">{{ __('Primary Button Label') }}</label>
        <input type="text" name="primary_button_label" value="{{ Arr::get($attributes, 'primary_button_label') }}" class="form-control" placeholder="{{ __('Primary Button Label') }}">
    </div>

    <div class="mb-3">
        <label for="link_label">{{ __('Primary Button URL') }}</label>
        <input type="text" name="primary_button_url" value="{{ Arr::get($attributes, 'primary_button_url') }}" class="form-control" placeholder="{{ __('Primary Button URL') }}">
    </div>

    <div class="mb-3">
        <label for="link_label">{{ __('Secondary Button Label') }}</label>
        <input type="text" name="secondary_button_label" value="{{ Arr::get($attributes, 'secondary_button_label') }}" class="form-control" placeholder="{{ __('Secondary Button Label') }}">
    </div>

    <div class="mb-3">
        <label for="link_label">{{ __('Secondary Button Icon') }}</label>
        {{ Form::mediaImage('secondary_button_icon', Arr::get($attributes, 'secondary_button_icon')) }}
    </div>

    <div class="mb-3">
        <label for="link_label">{{ __('Secondary Button URL') }}</label>
        <input type="text" name="secondary_button_url" value="{{ Arr::get($attributes, 'secondary_button_url') }}" class="form-control" placeholder="{{ __('Secondary Button URL') }}">
    </div>

    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}

    <div class="border p-2 mt-3">
        <div class="mb-3">
            <label class="form-label">{{ __('Form title') }}</label>
            <input type="text" name="form_title" value="{{ Arr::get($attributes, 'form_title') }}" class="form-control" placeholder="{{ __('Form title') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Form description') }}</label>
            <textarea name="form_description" class="form-control" placeholder="{{ __('Form description') }}">{{ Arr::get($attributes, 'form_description') }}</textarea>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-control-sm">{{ __('Inner background') }}</label>
                    {{ Form::mediaImage('inner_background', Arr::get($attributes, 'inner_background')) }}
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-control-sm">{{ __('Form background') }}</label>
                    {{ Form::mediaImage('form_background', Arr::get($attributes, 'form_background')) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="link_label">{{ __('Link label') }}</label>
                    <input type="text" name="link_label" value="{{ Arr::get($attributes, 'link_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="link_label">{{ __('Link URL') }}</label>
                    <input type="text" name="link_url" value="{{ Arr::get($attributes, 'link_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
                </div>
            </div>
        </div>
    </div>
</section>
