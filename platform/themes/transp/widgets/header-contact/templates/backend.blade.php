<div class="mb-3">
    <label for="widget-name">{{ __('Name') }}</label>
    <input type="text" id="widget-name" class="form-control" name="name" value="{{ Arr::get($config, 'name') }}">
</div>

@foreach(range(1, 2) as $i)
    <div class="mb-3">
        <label for="icon_block_{{ $i }}">{{ __('Icon block :number', ['number' => $i]) }}</label>
        {{ Form::mediaImage("icon_block_$i", Arr::get($config, "icon_block_$i")) }}
    </div>

    <div class="mb-3">
        <label for="text_block_{{ $i }}">{{ __('Text block :number', ['number' => $i]) }}</label>
        <input class="form-control" id="text_block_{{ $i }}" name="text_block_{{ $i }}" value="{{ Arr::get($config, "text_block_$i") }}" />
    </div>
@endforeach
