<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Subtitle') }}</label>
        <input name="subtitle" value="{{ Arr::get($attributes, 'subtitle') }}" class="form-control" />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Icon') }}</label>
        {!! Form::mediaImage('icon', Arr::get($attributes, 'icon')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Description') }}</label>
        <textarea name="description" class="form-control" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect('style', [
            'style-1'  => __('Style :number', ['number' => 1]),
            'style-2'  => __('Style :number', ['number' => 2]),
        ], Arr::get($attributes, 'style')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Choose services') }}</label>
        <select class="select-full" name="service_ids" multiple>
            @foreach($services as $key => $value)
                <option @selected(in_array($key, $serviceIds)) value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>
</section>
