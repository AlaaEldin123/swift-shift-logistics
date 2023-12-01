<div class="mb-3">
    <label for="widget-name">{{ __('Name') }}</label>
    <input type="text" id="widget-name" class="form-control" name="name" value="{{ Arr::get($config, 'name') }}">
</div>

<div class="mb-3">
    <label for="widget_menu">{{ __('Select gallery') }}</label>
    {!! Form::customSelect('gallery_id', $galleries, Arr::get($config, 'gallery_id'), ['class' => 'form-control select-full']) !!}
</div>
