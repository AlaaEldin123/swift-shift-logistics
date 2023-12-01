<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Per page') }}</label>
        <input type="text" name="per_page" value="{{ Arr::get($attributes, 'per_page') }}" class="form-control" placeholder="{{ __('Per page') }}">
    </div>
</section>
