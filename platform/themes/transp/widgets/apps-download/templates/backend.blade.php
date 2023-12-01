<div class="mb-3">
    <label for="widget-name">{{ __('Text') }}</label>
    <textarea id="text" name="text" class="form-control">{{ Arr::get($config, 'text') }}</textarea>
</div>

<div class="mb-3">
    <label for="google_play_logo">{{ __('Google Play logo') }}</label>
    {!! Form::mediaImage('google_play_logo', Arr::get($config, 'google_play_logo')) !!}
</div>

<div class="mb-3">
    <label for="google_play_url">{{ __('Google Play URL') }}</label>
    <input type="text" id="google_play_url" name="google_play_url" class="form-control" value="{{ Arr::get($config, 'google_play_url') }}">
</div>

<div class="mb-3">
    <label for="logo">{{ __('App Store Logo') }}</label>
    {!! Form::mediaImage('app_store_logo', Arr::get($config, 'app_store_logo')) !!}
</div>

<div class="mb-3">
    <label for="app_store_url">{{ __('App Store Url') }}</label>
    <input type="text" id="app_store_url" name="app_store_url" class="form-control" value="{{ Arr::get($config, 'app_store_url') }}">
</div>
