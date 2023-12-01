<?php

use Botble\Theme\Facades\Theme;
use Botble\Theme\Theme as BaseTheme;

app()->booted(function () {
    if (! method_exists(BaseTheme::class, 'registerThemeIconFields')) {
        return;
    }

    $icons = [
        'fi-rr-add',
        'fi-rr-address-book',
        'fi-rr-alarm-clock',
        'fi-rr-align-center',
        'fi-rr-align-justify',
        'fi-rr-align-left',
        'fi-rr-align-right',
        'fi-rr-ambulance',
        'fi-rr-angle-double-left',
        'fi-rr-angle-double-right',
        'fi-rr-angle-double-small-left',
        'fi-rr-angle-double-small-right',
        'fi-rr-angle-down',
        'fi-rr-angle-left',
        'fi-rr-angle-right',
        'fi-rr-angle-small-down',
        'fi-rr-angle-small-left',
        'fi-rr-angle-small-right',
        'fi-rr-angle-small-up',
        'fi-rr-angle-up',
        'fi-rr-apple',
        'fi-rr-apps-add',
        'fi-rr-apps-delete',
        'fi-rr-apps-sort',
        'fi-rr-apps',
        'fi-rr-archive',
        'fi-rr-arrow-down',
        'fi-rr-arrow-from-bottom',
        'fi-rr-arrow-left',
        'fi-rr-arrow-right',
        'fi-rr-arrow-small-down',
        'fi-rr-arrow-small-left',
        'fi-rr-arrow-small-right',
        'fi-rr-arrow-small-up',
        'fi-rr-arrow-up',
        'fi-rr-asterik',
        'fi-rr-at',
        'fi-rr-backpack',
        'fi-rr-badge',
        'fi-rr-balloons',
        'fi-rr-ban',
        'fi-rr-band-aid',
        'fi-rr-bank',
        'fi-rr-barber-shop',
        'fi-rr-baseball',
        'fi-rr-basketball',
        'fi-rr-bed',
        'fi-rr-beer',
        'fi-rr-bell-ring',
        'fi-rr-bell-school',
        'fi-rr-bell',
        'fi-rr-bike',
        'fi-rr-billiard',
        'fi-rr-bold',
        'fi-rr-book-alt',
        'fi-rr-book',
        'fi-rr-bookmark',
        'fi-rr-bowling',
        'fi-rr-box-alt',
        'fi-rr-box',
        'fi-rr-bread-slice',
        'fi-rr-briefcase',
        'fi-rr-broom',
        'fi-rr-browser',
        'fi-rr-brush',
        'fi-rr-bug',
        'fi-rr-building',
        'fi-rr-bulb',
        'fi-rr-butterfly',
        'fi-rr-cake-birthday',
        'fi-rr-cake-wedding',
        'fi-rr-calculator',
        'fi-rr-calendar',
        'fi-rr-call-history',
        'fi-rr-call-incoming',
        'fi-rr-call-missed',
        'fi-rr-call-outgoing',
        'fi-rr-camera',
        'fi-rr-camping',
        'fi-rr-car',
        'fi-rr-caret-down',
        'fi-rr-caret-left',
        'fi-rr-caret-right',
        'fi-rr-caret-up',
        'fi-rr-carrot',
        'fi-rr-chart-connected',
        'fi-rr-chart-histogram',
        'fi-rr-chart-network',
        'fi-rr-chart-pie-alt',
        'fi-rr-chart-pie',
        'fi-rr-chart-pyramid',
        'fi-rr-chart-set-theory',
        'fi-rr-chart-tree',
        'fi-rr-chat-arrow-down',
        'fi-rr-chat-arrow-grow',
        'fi-rr-check',
        'fi-rr-checkbox',
        'fi-rr-cheese',
        'fi-rr-chess-piece',
        'fi-rr-child-head',
        'fi-rr-circle-small',
        'fi-rr-circle',
        'fi-rr-clip',
        'fi-rr-clock',
        'fi-rr-cloud-check',
        'fi-rr-cloud-disabled',
        'fi-rr-cloud-download',
        'fi-rr-cloud-share',
        'fi-rr-cloud-upload',
        'fi-rr-cloud',
        'fi-rr-clouds',
        'fi-rr-cocktail',
        'fi-rr-coffee',
        'fi-rr-comment-alt',
        'fi-rr-comment-check',
        'fi-rr-comment-heart',
        'fi-rr-comment-info',
        'fi-rr-comment-user',
        'fi-rr-comment',
        'fi-rr-comments',
        'fi-rr-compress-alt',
        'fi-rr-compress',
        'fi-rr-computer',
        'fi-rr-confetti',
        'fi-rr-cookie',
        'fi-rr-copy-alt',
        'fi-rr-copy',
        'fi-rr-copyright',
        'fi-rr-cow',
        'fi-rr-cream',
        'fi-rr-credit-card',
        'fi-rr-croissant',
        'fi-rr-cross-circle',
        'fi-rr-cross-small',
        'fi-rr-cross',
        'fi-rr-crown',
        'fi-rr-cube',
        'fi-rr-cupcake',
        'fi-rr-cursor-finger',
        'fi-rr-cursor-plus',
        'fi-rr-cursor-text-alt',
        'fi-rr-cursor-text',
        'fi-rr-cursor',
        'fi-rr-dart',
        'fi-rr-dashboard',
        'fi-rr-data-transfer',
        'fi-rr-database',
        'fi-rr-delete',
        'fi-rr-diamond',
        'fi-rr-dice',
        'fi-rr-diploma',
        'fi-rr-disco-ball',
        'fi-rr-disk',
        'fi-rr-doctor',
        'fi-rr-document-signed',
        'fi-rr-document',
        'fi-rr-dollar',
        'fi-rr-download',
        'fi-rr-drink-alt',
        'fi-rr-drumstick',
        'fi-rr-duplicate',
        'fi-rr-e-learning',
        'fi-rr-earnings',
        'fi-rr-edit-alt',
        'fi-rr-edit',
        'fi-rr-envelope-ban',
        'fi-rr-envelope-download',
        'fi-rr-envelope-marker',
        'fi-rr-envelope-open',
        'fi-rr-envelope-plus',
        'fi-rr-envelope',
        'fi-rr-euro',
        'fi-rr-exclamation',
        'fi-rr-expand',
        'fi-rr-eye-crossed',
        'fi-rr-eye-dropper',
        'fi-rr-eye',
        'fi-rr-feather',
        'fi-rr-ferris-wheel',
        'fi-rr-file-add',
        'fi-rr-file-ai',
        'fi-rr-file-check',
        'fi-rr-file-delete',
        'fi-rr-file-eps',
        'fi-rr-file-gif',
        'fi-rr-file-music',
        'fi-rr-file-psd',
        'fi-rr-file',
        'fi-rr-fill',
        'fi-rr-film',
        'fi-rr-filter',
        'fi-rr-fingerprint',
        'fi-rr-fish',
        'fi-rr-flag',
        'fi-rr-flame',
        'fi-rr-flip-horizontal',
        'fi-rr-flower-bouquet',
        'fi-rr-flower-tulip',
        'fi-rr-flower',
        'fi-rr-folder-add',
        'fi-rr-folder',
        'fi-rr-following',
        'fi-rr-football',
        'fi-rr-form',
        'fi-rr-forward',
        'fi-rr-fox',
        'fi-rr-frown',
        'fi-rr-ftp',
        'fi-rr-gallery',
        'fi-rr-gamepad',
        'fi-rr-gas-pump',
        'fi-rr-gem',
        'fi-rr-gift',
        'fi-rr-glass-cheers',
        'fi-rr-glasses',
        'fi-rr-globe-alt',
        'fi-rr-globe',
        'fi-rr-golf',
        'fi-rr-graduation-cap',
        'fi-rr-graphic-tablet',
        'fi-rr-grid-alt',
        'fi-rr-grid',
        'fi-rr-guitar',
        'fi-rr-gym',
        'fi-rr-hamburger',
        'fi-rr-hand-holding-heart',
        'fi-rr-hastag',
        'fi-rr-hat-birthday',
        'fi-rr-head-side-thinking',
        'fi-rr-headphones',
        'fi-rr-headset',
        'fi-rr-heart-arrow',
        'fi-rr-heart',
        'fi-rr-home-location-alt',
        'fi-rr-home-location',
        'fi-rr-home',
        'fi-rr-hourglass-end',
        'fi-rr-hourglass',
        'fi-rr-ice-cream',
        'fi-rr-ice-skate',
        'fi-rr-id-badge',
        'fi-rr-inbox',
        'fi-rr-incognito',
        'fi-rr-indent',
        'fi-rr-infinity',
        'fi-rr-info',
        'fi-rr-interactive',
        'fi-rr-interlining',
        'fi-rr-interrogation',
        'fi-rr-italic',
        'fi-rr-jpg',
        'fi-rr-key',
        'fi-rr-keyboard',
        'fi-rr-kite',
        'fi-rr-label',
        'fi-rr-laptop',
        'fi-rr-lasso',
        'fi-rr-laugh',
        'fi-rr-layers',
        'fi-rr-layout-fluid',
        'fi-rr-leaf',
        'fi-rr-letter-case',
        'fi-rr-life-ring',
        'fi-rr-line-width',
        'fi-rr-link',
        'fi-rr-lipstick',
        'fi-rr-list-check',
        'fi-rr-list',
        'fi-rr-location-alt',
        'fi-rr-lock-alt',
        'fi-rr-lock',
        'fi-rr-luggage-rolling',
        'fi-rr-magic-wand',
        'fi-rr-makeup-brush',
        'fi-rr-man-head',
        'fi-rr-map-marker-cross',
        'fi-rr-map-marker-home',
        'fi-rr-map-marker-minus',
        'fi-rr-map-marker-plus',
        'fi-rr-map-marker',
        'fi-rr-map',
        'fi-rr-marker-time',
        'fi-rr-marker',
        'fi-rr-mars-double',
        'fi-rr-mars',
        'fi-rr-mask-carnival',
        'fi-rr-medicine',
        'fi-rr-megaphone',
        'fi-rr-meh',
        'fi-rr-menu-burger',
        'fi-rr-menu-dots-vertical',
        'fi-rr-menu-dots',
        'fi-rr-microphone-alt',
        'fi-rr-microphone',
        'fi-rr-minus-small',
        'fi-rr-minus',
        'fi-rr-mobile',
        'fi-rr-mode-landscape',
        'fi-rr-mode-portrait',
        'fi-rr-money',
        'fi-rr-moon',
        'fi-rr-mountains',
        'fi-rr-mouse',
        'fi-rr-mug-alt',
        'fi-rr-music-alt',
        'fi-rr-music',
        'fi-rr-navigation',
        'fi-rr-network-cloud',
        'fi-rr-network',
        'fi-rr-notebook',
        'fi-rr-opacity',
        'fi-rr-package',
        'fi-rr-paint-brush',
        'fi-rr-palette',
        'fi-rr-paper-plane',
        'fi-rr-password',
        'fi-rr-pause',
        'fi-rr-paw',
        'fi-rr-pencil',
        'fi-rr-pharmacy',
        'fi-rr-phone-call',
        'fi-rr-phone-cross',
        'fi-rr-phone-pause',
        'fi-rr-phone-slash',
        'fi-rr-physics',
        'fi-rr-picture',
        'fi-rr-ping-pong',
        'fi-rr-pizza-slice',
        'fi-rr-plane',
        'fi-rr-play-alt',
        'fi-rr-play',
        'fi-rr-playing-cards',
        'fi-rr-plus-small',
        'fi-rr-plus',
        'fi-rr-poker-chip',
        'fi-rr-portrait',
        'fi-rr-pound',
        'fi-rr-power',
        'fi-rr-presentation',
        'fi-rr-print',
        'fi-rr-protractor',
        'fi-rr-pulse',
        'fi-rr-pyramid',
        'fi-rr-quote-right',
        'fi-rr-rainbow',
        'fi-rr-raindrops',
        'fi-rr-rec',
        'fi-rr-receipt',
        'fi-rr-record-vinyl',
        'fi-rr-rectabgle-vertical',
        'fi-rr-rectangle-horizontal',
        'fi-rr-rectangle-panoramic',
        'fi-rr-recycle',
        'fi-rr-redo-alt',
        'fi-rr-redo',
        'fi-rr-reflect',
        'fi-rr-refresh',
        'fi-rr-resize',
        'fi-rr-resources',
        'fi-rr-rewind',
        'fi-rr-rhombus',
        'fi-rr-rings-wedding',
        'fi-rr-road',
        'fi-rr-rocket',
        'fi-rr-room-service',
        'fi-rr-rotate-right',
        'fi-rr-rugby',
        'fi-rr-sad',
        'fi-rr-salad',
        'fi-rr-scale',
        'fi-rr-school-bus',
        'fi-rr-school',
        'fi-rr-scissors',
        'fi-rr-screen',
        'fi-rr-search-alt',
        'fi-rr-search-heart',
        'fi-rr-search',
        'fi-rr-settings-sliders',
        'fi-rr-settings',
        'fi-rr-share',
        'fi-rr-shield-check',
        'fi-rr-shield-exclamation',
        'fi-rr-shield-interrogation',
        'fi-rr-shield-plus',
        'fi-rr-shield',
        'fi-rr-ship-side',
        'fi-rr-ship',
        'fi-rr-shop',
        'fi-rr-shopping-bag-add',
        'fi-rr-shopping-bag',
        'fi-rr-shopping-cart-add',
        'fi-rr-shopping-cart-check',
        'fi-rr-shopping-cart',
        'fi-rr-shuffle',
        'fi-rr-sign-in-alt',
        'fi-rr-sign-in',
        'fi-rr-sign-out-alt',
        'fi-rr-sign-out',
        'fi-rr-signal-alt-1',
        'fi-rr-signal-alt-2',
        'fi-rr-signal-alt',
        'fi-rr-skateboard',
        'fi-rr-smartphone',
        'fi-rr-smile-wink',
        'fi-rr-smile',
        'fi-rr-snowflake',
        'fi-rr-soap',
        'fi-rr-soup',
        'fi-rr-spa',
        'fi-rr-speaker',
        'fi-rr-sphere',
        'fi-rr-spinner-alt',
        'fi-rr-spinner',
        'fi-rr-square-root',
        'fi-rr-square',
        'fi-rr-star-octogram',
        'fi-rr-star',
        'fi-rr-stats',
        'fi-rr-stethoscope',
        'fi-rr-sticker',
        'fi-rr-stop',
        'fi-rr-stopwatch',
        'fi-rr-subtitles',
        'fi-rr-sun',
        'fi-rr-sunrise',
        'fi-rr-surfing',
        'fi-rr-sword',
        'fi-rr-syringe',
        'fi-rr-tablet',
        'fi-rr-target',
        'fi-rr-taxi',
        'fi-rr-tennis',
        'fi-rr-terrace',
        'fi-rr-test-tube',
        'fi-rr-test',
        'fi-rr-text-check',
        'fi-rr-text',
        'fi-rr-thermometer-half',
        'fi-rr-thumbs-down',
        'fi-rr-thumbs-up',
        'fi-rr-thumbtack',
        'fi-rr-ticket',
        'fi-rr-time-add',
        'fi-rr-time-check',
        'fi-rr-time-delete',
        'fi-rr-time-fast',
        'fi-rr-time-forward-sixty',
        'fi-rr-time-forward-ten',
        'fi-rr-time-forward',
        'fi-rr-time-half-past',
        'fi-rr-time-oclock',
        'fi-rr-time-past',
        'fi-rr-time-quarter-past',
        'fi-rr-time-quarter-to',
        'fi-rr-time-twenty-four',
        'fi-rr-tool-crop',
        'fi-rr-tool-marquee',
        'fi-rr-tooth',
        'fi-rr-tornado',
        'fi-rr-train-side',
        'fi-rr-train',
        'fi-rr-transform',
        'fi-rr-trash',
        'fi-rr-treatment',
        'fi-rr-tree-christmas',
        'fi-rr-tree',
        'fi-rr-triangle',
        'fi-rr-trophy',
        'fi-rr-truck-side',
        'fi-rr-umbrella',
        'fi-rr-underline',
        'fi-rr-undo-alt',
        'fi-rr-undo',
        'fi-rr-unlock',
        'fi-rr-upload',
        'fi-rr-usb-pendrive',
        'fi-rr-user-add',
        'fi-rr-user-delete',
        'fi-rr-user-remove',
        'fi-rr-user-time',
        'fi-rr-user',
        'fi-rr-utensils',
        'fi-rr-vector-alt',
        'fi-rr-vector',
        'fi-rr-venus-double',
        'fi-rr-venus-mars',
        'fi-rr-venus',
        'fi-rr-video-camera',
        'fi-rr-volleyball',
        'fi-rr-volume',
        'fi-rr-wheelchair',
        'fi-rr-wifi-alt',
        'fi-rr-wind',
        'fi-rr-woman-head',
        'fi-rr-world',
        'fi-rr-yen',
        'fi-rr-zoom-in',
        'fi-rr-zoom-out',
    ];

    $css = [Theme::asset()->url('fonts/uicons/uicons-regular-rounded.css')];

    Theme::registerThemeIconFields($icons, $css);
});
