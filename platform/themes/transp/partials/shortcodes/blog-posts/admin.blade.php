<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Title') }}</label>
        <input name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Choose categories') }}</label>
        <select class="select-full" name="category_ids" multiple>
            @foreach($categories as $key => $value)
                <option @selected(in_array($key, $categoryIds)) value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>
</section>
