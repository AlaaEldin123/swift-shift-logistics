@if($priority != -9970 && $priority != 140 && $priority != 120 && $priority != 130 & $priority != 90
&& $priority!= 30 && $priority!= 50 && $priority!= 1000 && $priority!= 2000 && $priority!= 9990 && $priority!= 9999 )
    <div
        id="panel-section-item-{{ $sectionId }}-{{ $id }}"
        data-priority="{{ $priority }}"
        data-id="{{ $id }}"
        data-group-id="{{ $sectionId }}"
        class="col-6 col-md-4 panel-section-item panel-section-item-{{ $id }} panel-section-item-priority-{{ $priority }}"
    >
        <div @class(['row g-3', 'align-items-start' => $description, 'align-items-center' => ! $description])>
            <div class="col-auto">
                <div class="d-flex align-items-center justify-content-center panel-section-item-icon">
                    <x-core::icon :name="$icon ?: 'ti ti-box'"/>
                </div>
            </div>
            <div class="col">
                <div class="d-block mb-1 panel-section-item-title">
                    @if($url)
                        <a class="text-decoration-none text-primary fw-bold" href="{{ $url }}"
                           @if($urlShouldOpenNewTab) target="_blank" @endif>
                            @endif

                            {{ $title }}

                            @if($url)
                        </a>
                    @endif
                </div>

                @if($description)
                    <div class="text-secondary mt-n1">{{ $description }}</div>
                @endif
            </div>
        </div>

    </div>
@endif
