@php
    $fields = [
        'badge' => [
            'type' => 'text',
            'title' => __('Badge'),
            'required' => true,
        ],
        'title' => [
            'type' => 'text',
            'title' => __('Title'),
            'required' => true,
        ],
        'description' => [
            'type' => 'textarea',
            'title' => __('Description'),
            'required' => true,
        ],
        'image' => [
            'type' => 'image',
            'title' => __('Image'),
            'required' => true,
        ],
        'icon_for_feature_1' => [
            'type' => 'image',
            'title' => __('Icon 1'),
        ],
        'feature_1' => [
            'type' => 'text',
            'title' => __('Feature 1'),
        ],
        'feature_description_1' => [
            'type' => 'text',
            'title' => __('Feature Description 1'),
        ],
        'icon_for_feature_2' => [
            'type' => 'image',
            'title' => __('Icon 2'),
        ],
        'feature_2' => [
            'type' => 'text',
            'title' => __('Feature 2'),
        ],
        'feature_description_2' => [
            'type' => 'text',
            'title' => __('Feature Description 2'),
        ],
        'platform_google_play_url' => [
            'type' => 'text',
            'title' => __('GooglePlay URL'),
        ],
        'platform_google_play_logo' => [
            'type' => 'image',
            'title' => __('GooglePlay logo'),
        ],
        'platform_apple_store_url' => [
            'type' => 'text',
            'title' => __('AppStore URL'),
        ],
        'platform_apple_store_logo' => [
            'type' => 'image',
            'title' => __('AppStore logo'),
        ],
        'button_primary_label' => [
            'type' => 'text',
            'title' => __('Button primary label'),
        ],
        'button_primary_url' => [
            'type' => 'text',
            'title' => __('Button primary URL'),
        ],
        'button_secondary_label' => [
            'type' => 'text',
            'title' => __('Button secondary label'),
        ],
        'button_secondary_url' => [
            'type' => 'text',
            'title' => __('Button secondary URL'),
        ],
    ];
@endphp

<section>
    <div class="text-muted">
        {{ __('Please use the fields in the tab as indicated by their content and pairs') }}
    </div>
    {!! Theme::partial('shortcodes.includes.tabs', compact('fields', 'attributes')) !!}
</section>
