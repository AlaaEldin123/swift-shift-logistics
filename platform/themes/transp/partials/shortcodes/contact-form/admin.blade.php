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
        <label class="form-label">{{ __('Button Label') }}</label>
        <input type="text" name="title_button" value="{{ Arr::get($attributes, 'title_button') }}" class="form-control" placeholder="{{ __('Title Button') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Subtitle') }}</label>
        <input type="text" name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control" placeholder="{{ __('Subtitle') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Address') }}</label>
        <input type="text" name="address" value="{{ Arr::get($attributes, 'address') }}" class="form-control" placeholder="{{ __('Address') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Phone') }}</label>
        <input type="text" name="phone" value="{{ Arr::get($attributes, 'phone') }}" class="form-control" placeholder="{{ __('Phone') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Email') }}</label>
        <input type="text" name="email" value="{{ Arr::get($attributes, 'email') }}" class="form-control" placeholder="{{ __('Email') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Open time') }}</label>
        <input type="text" name="open_time" value="{{ Arr::get($attributes, 'open_time') }}" class="form-control" placeholder="{{ __('Open time') }}">
    </div>
</section>
