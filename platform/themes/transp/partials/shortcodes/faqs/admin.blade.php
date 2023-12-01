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
        <label class="form-label">{{ __('Gallery') }}</label>
        {{ Form::customSelect('gallery_id', $galleries, Arr::get($attributes, 'gallery_id'), ['wrapper_class' => 'mb-1']) }}
        <div class="text-muted">
            {{ __('Choose a gallery to display on the left side. For best results, use a gallery with 3 images, first image is bigger than the other two.') }}
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('FAQ categories') }}</label>
        <select class="select-full" name="category_ids" multiple>
            @foreach($categories as $key => $value)
                <option @selected(in_array($key, $categoryIds)) value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">
            {{ Form::checkbox('expand_first_time', 1, Arr::get($attributes, 'expand_first_time')) }}
            {{ __('Expand first item') }}
        </label>
    </div>

    <label class="form-label">{{ __('Bottom section') }}</label>

    <div class="border p-2">
        <div class="mb-3">
            <label class="form-label">{{ __('Title') }}</label>
            <input type="text" name="bottom_title" value="{{ Arr::get($attributes, 'bottom_title') }}" class="form-control" placeholder="{{ __('Bottom title') }}">
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="button_label">{{ __('Button label') }}</label>
                    <input type="text" name="button_label" value="{{ Arr::get($attributes, 'button_label') }}" class="form-control" placeholder="{{ __('Button label') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="button_label">{{ __('Button URL') }}</label>
                    <input type="text" name="button_url" value="{{ Arr::get($attributes, 'button_url') }}" class="form-control" placeholder="{{ __('Button URL') }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="link_label">{{ __('Link label') }}</label>
                    <input type="text" name="link_label" value="{{ Arr::get($attributes, 'link_label') }}" class="form-control" placeholder="{{ __('Link label') }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="link_label">{{ __('Link URL') }}</label>
                    <input type="text" name="link_url" value="{{ Arr::get($attributes, 'link_url') }}" class="form-control" placeholder="{{ __('Link URL') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect('style', [
            'style-1'  => __('Style :number', ['number' => 1]),
            'style-2'  => __('Style :number', ['number' => 2]),
        ], Arr::get($attributes, 'style')) !!}
    </div>
</section>
