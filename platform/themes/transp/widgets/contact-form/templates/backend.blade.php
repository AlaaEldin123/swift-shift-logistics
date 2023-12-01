<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ $config['title'] }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background color') }}</label>
    {!! Form::customColor('background_color', Arr::get($config, 'background_color', '#ffe799'), ['class' => 'form-control']) !!}
</div>

