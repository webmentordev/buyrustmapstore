<?php
return [
    'meta' => [
        'defaults'       => [
            'title'        => "FPS+ Custom Rust Maps",
            'titleBefore'  => false,
            'description'  => 'Purchase Updated High Quality FPS+ Boosted Custom Rust Maps',
            'separator'    => ' — ',
            'keywords'     => [],
            'canonical'    => false,
            'robots'       => false,
        ],
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],
        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'FPS+ Custom Rust Maps',
            'description' => 'Purchase Updated High Quality FPS+ Boosted Custom Rust Maps',
            'url'         => null,
            'type'        => false,
            'site_name'   => false,
            'images'      => [
                config('app.url').'/assets/rust_maps_banner.webp'
            ],
        ],
    ],
    'twitter' => [
        'defaults' => [
            'card'        => 'large_summary',
            'site'        => '@buyrustmapsstore',
        ],
    ],
    'json-ld' => [
        'defaults' => [
            'title'       => 'FPS+ Custom Rust Maps',
            'description' => 'Purchase Updated High Quality FPS+ Boosted Custom Rust Maps',
            'url'         => false,
            'type'        => 'WebPage',
            'images'      => [
                config('app.url').'/assets/rust_maps_preview.png'
            ],
        ],
    ],
];
