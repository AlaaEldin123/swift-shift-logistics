@php
    $fields = [
        'title' => [
            'title' => __('Text'),
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
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="left_background">{{ __('Left background') }}</label>
                {{ Form::mediaImage('left_background', Arr::get($attributes, 'left_background')) }}
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="right_background">{{ __('Right background') }}</label>
                {{ Form::mediaImage('right_background', Arr::get($attributes, 'right_background')) }}
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="center_icon">{{ __('Center icon') }}</label>
        {{ Form::mediaImage('center_icon', Arr::get($attributes, 'center_icon')) }}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Badge text') }}</label>
        <input type="text" name="badge_text" value="{{ Arr::get($attributes, 'badge_text') }}" class="form-control" placeholder="{{ __('Badge text') }}">
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

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="link_label">{{ __('Link label') }}</label>
                <input type="text" name="link_label" value="{{ Arr::get($attributes, 'link_label') }}" class="form-control" placeholder="{{ __('Link label') }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="link_label">{{ __('Link URL') }}</label>
                <input type="text" name="link_url" value="{{ Arr::get($attributes, 'link_url') }}" class="form-control" placeholder="{{ __('Link URL') }}">
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
