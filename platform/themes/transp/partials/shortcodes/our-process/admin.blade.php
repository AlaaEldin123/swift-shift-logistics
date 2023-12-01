@php
    $fields = [
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
            'required' => true,
        ],
        'description' => [
            'type' => 'textarea',
            'title' => __('Description'),
        ],
        'image' => [
            'type' => 'image',
            'title' => __('Image'),
        ],
        'icon' => [
            'type' => 'image',
            'title' => __('Icon'),
        ],
        'link_label' => [
            'type' => 'text',
            'title' => __('Link Label'),
        ],
        'link_url' => [
            'type' => 'text',
            'title' => __('Link URL'),
        ]
    ];
@endphp

<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Description') }}</label>
    <textarea name="description" class="form-control" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'description') }}</textarea>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">{{ __('Icon') }}</label>
            {!! Form::mediaImage('icon', Arr::get($attributes, 'icon')) !!}
        </div>
    </div>
</div>

{!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
