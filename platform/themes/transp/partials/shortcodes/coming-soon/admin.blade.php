<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Opening time') }}</label>
        <input type="date" name="time" value="{{ Arr::get($attributes, 'time') }}" class="form-control" placeholder="{{ __('Opening time') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Phone') }}</label>
        <input type="text" name="phone" value="{{ Arr::get($attributes, 'phone') }}" class="form-control" placeholder="{{ __('Phone') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Email') }}</label>
        <input type="email" name="email" value="{{ Arr::get($attributes, 'email') }}" class="form-control" placeholder="{{ __('Email') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Image') }}</label>
        {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
    </div>
</section>
