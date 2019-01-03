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
                    'configuration_background_image',
                    'configuration_background_color',
                    'configuration_background',
                ],
            ],
            'divider'    => [
                'title'  => 'anomaly.extension.section_block::tab.divider',
                'fields' => [
                    'configuration_top_divider',
                    'configuration_top_divider_color',
                    'configuration_top_divider_arrangement',
                    'configuration_bottom_divider',
                    'configuration_bottom_divider_color',
                    'configuration_bottom_divider_arrangement',
                    'configuration_bottom_divider_flip_horizontally',
                ],
            ],
            'style'      => [
                'title'  => 'anomaly.extension.section_block::tab.style',
                'fields' => [
                    'configuration_height',

                    'configuration_margin',

                    'configuration_padding_top',
                    'configuration_padding_left',
                    'configuration_padding_right',
                    'configuration_padding_bottom',

                    'configuration_border_radius_top_left',
                    'configuration_border_radius_top_right',
                    'configuration_border_radius_bottom_left',
                    'configuration_border_radius_bottom_right',
                ],
            ],
            'advanced'   => [
                'title'  => 'anomaly.extension.section_block::tab.advanced',
                'fields' => [
                    'configuration_css_id',
                    'configuration_css_class',
                    'configuration_custom_css',
                    'configuration_custom_js',
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
