<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Description') }}</label>
        <input type="text" name="description" value="{{ Arr::get($attributes, 'description') }}" class="form-control" placeholder="{{ __('Description') }}">
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
        <label class="form-label">{{ __('Button icon') }}</label>
        {!! Form::mediaImage('icon', Arr::get($attributes, 'icon')) !!}
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('Button icon URL') }}</label>
        <input type="text" name="icon_url" value="{{ Arr::get($attributes, 'icon_url') }}" class="form-control" placeholder="{{ __('Button icon URL') }}">
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">{{ __('Image Left Top') }}</label>
                    {!! Form::mediaImage('image_1', Arr::get($attributes, 'image_1')) !!}
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('Image Left Bottom') }}</label>
                    {!! Form::mediaImage('image_2', Arr::get($attributes, 'image_2')) !!}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">{{ __('Image Right') }}</label>
                    {!! Form::mediaImage('image_3', Arr::get($attributes, 'image_3')) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Floating Icon') }}</label>
        {!! Form::mediaImage('floating_icon', Arr::get($attributes, 'floating_icon')) !!}
    </div>
</section>
