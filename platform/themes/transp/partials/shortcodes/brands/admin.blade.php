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
        <label class="form-label">{{ __('Highlight text') }}</label>
        <input type="text" name="highlight_text" value="{{ Arr::get($attributes, 'highlight_text') }}" class="form-control" placeholder="{{ __('Highlight text') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background color') }}</label>
        {!! Form::customColor('background_color', Arr::get($attributes, 'background_color', '#E0F0F6'), ['class' => 'form-control']) !!}
    </div>

    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
</section>
