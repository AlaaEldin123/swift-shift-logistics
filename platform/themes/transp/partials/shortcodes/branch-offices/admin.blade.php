@php
    $fields = [
        'image' => [
            'type' => 'image',
            'title' => __('Image'),
        ],
        'icon' => [
            'type' => 'image',
            'title' => __('Icon'),
        ],
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
        ],
        'address' => [
            'type' => 'textarea',
            'title' => __('Address'),
        ],
        'phone_number' => [
            'type' => 'input',
            'title' => __('Phone number'),
        ],
        'email' => [
            'type' => 'input',
            'title' => __('Email'),
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
        <label class="form-label">{{ __('Button label') }}</label>
        <input type="text" name="button_label" value="{{ Arr::get($attributes, 'button_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Button URL') }}</label>
        <input type="text" name="button_url" value="{{ Arr::get($attributes, 'button_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
    </div>

    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
</section>
