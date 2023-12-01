@php
    $fields = [
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
        ],
    ];
@endphp

<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title primary') }}</label>
        <input type="text" name="title_primary" value="{{ Arr::get($attributes, 'title_primary') }}" class="form-control" placeholder="{{ __('Title') }}">
    </div>

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
        <input type="text" name="description" value="{{ Arr::get($attributes, 'description') }}" class="form-control" placeholder="{{ __('Description') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background color') }}</label>
        {!! Form::customColor('background_color', Arr::get($attributes, 'background_color', '#E0F0F6'), ['class' => 'form-control']) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Image') }}</label>
        {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
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

    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
</section>
