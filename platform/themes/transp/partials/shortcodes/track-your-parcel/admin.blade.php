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
        <label class="form-label">{{ __('Background') }}</label>
        {!! Form::mediaImage('background', Arr::get($attributes, 'background')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background color') }}</label>
        {!! Form::customColor('background_color', Arr::get($attributes, 'background_color', '#e0f0f6'), ['class' => 'form-control']) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('GooglePlay URL') }}</label>
        <input type="text" name="platform_google_play_url" value="{{ Arr::get($attributes, 'platform_google_play_url') }}" class="form-control" placeholder="{{ __('GooglePlay URL') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('GooglePlay logo') }}</label>
        {!! Form::mediaImage('platform_google_play_logo', Arr::get($attributes, 'platform_google_play_logo')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('AppleStore URL') }}</label>
        <input type="text" name="platform_apple_store_url" value="{{ Arr::get($attributes, 'platform_apple_store_url') }}" class="form-control" placeholder="{{ __('AppleStore URL') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('AppStore logo') }}</label>
        {!! Form::mediaImage('platform_apple_store_logo', Arr::get($attributes, 'platform_apple_store_logo')) !!}
    </div>
</section>
