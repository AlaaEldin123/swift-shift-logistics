@php
    $fields = [
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
            'required' => true,
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
        <label class="form-label">{{ __('Ticked line') }}</label>
        <textarea name="ticked_line" class="form-control" placeholder="{{ __('Ticked line') }}">{{ Arr::get($attributes, 'ticked_line') }}</textarea>
        <p class="small-text text-primary">{{ __('Split line for ticked by comma ‘, ’') }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button primary label') }}</label>
        <input type="text" name="button_primary_label" value="{{ Arr::get($attributes, 'button_primary_label') }}" class="form-control" placeholder="{{ __('Button primary label') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button primary URL') }}</label>
        <input type="text" name="button_primary_url" value="{{ Arr::get($attributes, 'button_primary_url') }}" class="form-control" placeholder="{{ __('Button primary URL') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button secondary label') }}</label>
        <input type="text" name="button_secondary_label" value="{{ Arr::get($attributes, 'button_secondary_label') }}" class="form-control" placeholder="{{ __('Button secondary label') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button secondary URL') }}</label>
        <input type="text" name="button_secondary_url" value="{{ Arr::get($attributes, 'button_secondary_url') }}" class="form-control" placeholder="{{ __('Button secondary URL') }}">
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
