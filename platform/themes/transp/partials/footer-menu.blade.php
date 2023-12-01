<ul {!! BaseHelper::clean($options) !!}>
    @foreach($menu_nodes->loadMissing('metadata') as $item)
        <li>
            <a class="font-sm color-grey-200" href="{{ url($item->url) }}" target="{{ $item->target }}">{{ $item->title }}</a>
        </li>
    @endforeach
</ul>
