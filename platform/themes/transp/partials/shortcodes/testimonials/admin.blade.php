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
        <label class="form-label">{{ __('Limit') }}</label>
        <input type="number" name="limit" value="{{ Arr::get($attributes, 'limit') }}" class="form-control" placeholder="{{ __('Limit') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background color') }}</label>
        {!! Form::customColor('background_color', Arr::get($attributes, 'background_color', '#034460'), ['class' => 'form-control']) !!}
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">{{ __('Background') }}</label>
                {!! Form::mediaImage('background', Arr::get($attributes, 'background')) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">{{ __('Right background') }}</label>
                {!! Form::mediaImage('right_background', Arr::get($attributes, 'right_background')) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="mb-3">
                <label class="form-label">{{ __('Shape image') }}</label>
                {!! Form::mediaImage('shape_image', Arr::get($attributes, 'shape_image')) !!}
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Prefix title icon') }}</label>
            {!! Form::mediaImage('prefix_title_icon', Arr::get($attributes, 'prefix_title_icon')) !!}
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Button primary URL') }}</label>
            <input type="text" name="button_primary_url" value="{{ Arr::get($attributes, 'button_primary_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Button primary label') }}</label>
            <input type="text" name="button_primary_label" value="{{ Arr::get($attributes, 'button_primary_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Button secondary URL') }}</label>
            <input type="text" name="button_secondary_url" value="{{ Arr::get($attributes, 'button_secondary_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Button secondary label') }}</label>
            <input type="text" name="button_secondary_label" value="{{ Arr::get($attributes, 'button_secondary_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Style') }}</label>
            {!! Form::customSelect('style', [
                'style-1'  => __('Style :number', ['number' => 1]),
                'style-2'  => __('Style :number', ['number' => 2]),
                'style-3'  => __('Style :number', ['number' => 3]),
                'style-4'  => __('Style :number', ['number' => 4]),
            ], Arr::get($attributes, 'style')) !!}
        </div>
    </div>
</section>
