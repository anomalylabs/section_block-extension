<?php

return [
    'options' => [
        'stacked' => true,
        'tabs'    => [
            'layout'     => [
                'title'  => 'anomaly.extension.section_block::tab.layout',
                'fields' => [
                    'configuration_layout',
                    'configuration_justify_content',
                    'configuration_alignment',
                ],
            ],
            'background' => [
                'title'  => 'anomaly.extension.section_block::tab.background',
                'fields' => [
                    'entry_background_image',
                    'configuration_background_color',
                    'configuration_background',
                ],
            ],
            'style'      => [
                'title'  => 'anomaly.extension.section_block::tab.style',
                'fields' => [
                    'configuration_height',
                ],
            ],
        ],
    ],
    'content' => [
        'fields' => [
            'entry_content',
        ],
    ],
];
