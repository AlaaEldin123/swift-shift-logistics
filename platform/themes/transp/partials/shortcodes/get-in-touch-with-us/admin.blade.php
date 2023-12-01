@php
    $fields = [
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
        ],
        'image' => [
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
        <label class="form-label">{{ __('Image') }}</label>
        {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
    </div>

    <div style="border: 1px solid #cac6c6; padding: 15px 10px; margin-bottom: 20px;">
        <h6 class="form-label mb-10">{{ __('Box info left') }}</h6>

        <div class="mb-3">
            <label class="form-label">{{ __('Title') }}</label>
            <input type="text" name="box_info_left_title" value="{{ Arr::get($attributes, 'box_info_left_title') }}" class="form-control" placeholder="{{ __('Title') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Description') }}</label>
            <input type="text" name="box_info_left_description" value="{{ Arr::get($attributes, 'box_info_left_description') }}" class="form-control" placeholder="{{ __('Description') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Button label') }}</label>
            <input type="text" name="box_info_left_button_label" value="{{ Arr::get($attributes, 'box_info_left_button_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Button URL') }}</label>
            <input type="text" name="box_info_left_button_url" value="{{ Arr::get($attributes, 'box_info_left_button_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
        </div>
    </div>

    <div style="border: 1px solid #cac6c6; padding: 15px 10px; margin-bottom: 20px;">
        <h6 class="form-label mb-10">{{ __('Box info bottom') }}</h6>

        <div class="mb-3">
            <label class="form-label">{{ __('Title') }}</label>
            <input type="text" name="box_info_bottom_title" value="{{ Arr::get($attributes, 'box_info_bottom_title') }}" class="form-control" placeholder="{{ __('Title') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Description') }}</label>
            <input type="text" name="box_info_bottom_description" value="{{ Arr::get($attributes, 'box_info_bottom_description') }}" class="form-control" placeholder="{{ __('Description') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Icon') }}</label>
            {!! Form::mediaImage('box_info_bottom_icon', Arr::get($attributes, 'box_info_bottom_icon')) !!}
        </div>
    </div>

    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
</section>
