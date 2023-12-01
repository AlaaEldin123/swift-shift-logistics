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
        <label class="form-label">{{ __('Icon') }}</label>
        {!! Form::mediaImage('icon', Arr::get($attributes, 'icon')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect('style', [
            'style-1'  => __('Style :number', ['number' => 1]),
            'style-2'  => __('Style :number', ['number' => 2]),
        ], Arr::get($attributes, 'style')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Packages') }}</label>
        <input type="text" name="package_ids" data-list="{{ json_encode($packages) }}" value="{{ Arr::get($attributes, 'package_ids') }}" class="form-control list-tagify" placeholder="{{ __('Choose packages for this pricing') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Packages per line') }}</label>
        <input min="1" type="number" name="number_of_packages_per_line" value="{{ Arr::get($attributes, 'number_of_packages_per_line') }}" class="form-control" placeholder="{{ __('Packages per line') }}">
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-control-sm">{{ __('Left background') }}</label>
                {{ Form::mediaImage('left_background', Arr::get($attributes, 'left_background')) }}
            </div>
        </div>

        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-control-sm">{{ __('Right background') }}</label>
                {{ Form::mediaImage('right_background', Arr::get($attributes, 'right_background')) }}
            </div>
        </div>
    </div>
</section>
