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
        <label class="form-label">{{ __('Image') }}</label>
        {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background shape') }}</label>
        {!! Form::mediaImage('background_shape', Arr::get($attributes, 'background_shape')) !!}
    </div>

    <div style="border: 1px solid #cac6c6; padding: 15px 10px; margin-bottom: 20px;">
        <h6 class="form-label mb-10">{{ __('Box info') }}</h6>

        <div class="mb-3">
            <label class="form-label">{{ __('Title') }}</label>
            <input type="text" name="box_info_title" value="{{ Arr::get($attributes, 'box_info_title') }}" class="form-control" placeholder="{{ __('Title') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Description') }}</label>
            <textarea name="box_info_description" class="form-control" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'box_info_description') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Label') }}</label>
            <input type="text" name="box_info_label" value="{{ Arr::get($attributes, 'box_info_label') }}" class="form-control" placeholder="{{ __('Label') }}">
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Action') }}</label>
            <input type="text" name="box_info_action" value="{{ Arr::get($attributes, 'box_info_action') }}" class="form-control" placeholder="{{ __('Action') }}">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Choose testimonial') }}</label>
        <select class="select-full" name="testimonial_id">
            @foreach($testimonials as $key => $value)
                <option @selected(Arr::get($attributes, 'testimonial_id') === $key) value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>

</section>
