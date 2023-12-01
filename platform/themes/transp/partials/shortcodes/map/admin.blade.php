<section>
    <div class="mb-3">
        <label for="address">{{ __('Logo') }}</label>
        {{ Form::mediaImage('logo', Arr::get($attributes, 'logo')) }}
    </div>

    <div class="mb-3">
        <label for="address">{{ __('Address') }}</label>
        <input type="text" name="address" value="{{ Arr::get($attributes, 'address') }}" class="form-control" placeholder="{{ __('Address') }}">
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="phone">{{ __('Phone number') }}</label>
                <input type="text" name="phone" value="{{ Arr::get($attributes, 'phone') }}" class="form-control" placeholder="{{ __('Phone number') }}">
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label for="email">{{ __('Email address') }}</label>
                <input type="text" name="email" value="{{ Arr::get($attributes, 'email') }}" class="form-control" placeholder="{{ __('Email address') }}">
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="opening_hours">{{ __('Opening hours') }}</label>
        <input type="text" name="opening_hours" value="{{ Arr::get($attributes, 'opening_hours') }}" class="form-control" placeholder="{{ __('Opening hours') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect('style', [
            'style-1' => __('Style :number', ['number' => 1]),
            'style-2' => __('Style :number', ['number' => 2])
        ], Arr::get($attributes, 'style')) !!}
    </div>
</section>
