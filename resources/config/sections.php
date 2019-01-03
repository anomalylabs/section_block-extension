<?php

return [
    'options' => [
        'stacked' => true,
        'tabs'    => [
            'layout'     => [
                'title'  => 'anomaly.module.blocks::tab.layout',
                'fields' => [
                    'configuration_layout',
                    'configuration_justify_content',
                    'configuration_alignment',
                ],
            ],
            'background' => [
                'title'  => 'anomaly.module.blocks::tab.background',
                'fields' => [
                    'configuration_background_image',
                    'configuration_background_color',
                    'configuration_background',
                ],
            ],
            'divider'    => [
                'title'  => 'anomaly.module.blocks::tab.divider',
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
            'spacing'    => [
                'title'  => 'anomaly.module.blocks::tab.spacing',
                'fields' => [
                    'configuration_margin',
                    'configuration_padding',
                ],
            ],
            'border'     => [
                'title'  => 'anomaly.module.blocks::tab.border',
                'fields' => [
                    'configuration_border_style',
                    'configuration_border_radius_top_left',
                    'configuration_border_radius_top_right',
                    'configuration_border_radius_bottom_left',
                    'configuration_border_radius_bottom_right',
                ],
            ],
            'visibility' => [
                'title'  => 'anomaly.module.blocks::tab.visibility',
                'fields' => [
                    'configuration_responsive_visibility',
                ],
            ],
            'advanced'   => [
                'title'  => 'anomaly.module.blocks::tab.advanced',
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
