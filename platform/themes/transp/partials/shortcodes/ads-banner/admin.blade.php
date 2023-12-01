<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('URL') }}</label>
        <input type="text" name="url" value="{{ Arr::get($attributes, 'url') }}" class="form-control" placeholder="{{ __('URL') }}">
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Left background') }}</label>
                {!! Form::mediaImage('left_background', Arr::get($attributes, 'left_background')) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label">{{ __('Right background') }}</label>
                {!! Form::mediaImage('right_background', Arr::get($attributes, 'right_background')) !!}
            </div>
        </div>
    </div>
</section>
