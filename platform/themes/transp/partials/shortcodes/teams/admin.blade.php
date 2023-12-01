<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Description') }}</label>
    <input type="text" name="description" value="{{ Arr::get($attributes, 'description') }}" class="form-control" placeholder="{{ __('Description') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button label') }}</label>
    <input type="text" name="button_label" value="{{ Arr::get($attributes, 'button_label') }}" class="form-control" placeholder="{{ __('Button Label') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button URL') }}</label>
    <input type="text" name="button_url" value="{{ Arr::get($attributes, 'button_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Choose teams') }}</label>
    <select class="select-full" name="team_ids" multiple>
        @foreach($teams as $key => $value)
            <option @selected(in_array($key, $teamIds)) value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
</div>
