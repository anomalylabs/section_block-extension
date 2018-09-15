<?php

return [
    'height'           => 'anomaly.field_type.text',
    'background_color' => 'anomaly.field_type.colorpicker',
    'layout'           => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'default_value' => 'standard',
            'options'       => [
                'standard'   => 'anomaly.extension.section_block::configuration.layout.option.standard',
                'full_width' => 'anomaly.extension.section_block::configuration.layout.option.full_width',
                'stretched'  => 'anomaly.extension.section_block::configuration.layout.option.stretched',
            ],
        ],
    ],
    'background'       => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'default_value' => 'default',
            'options'       => [
                'default'  => 'anomaly.extension.section_block::configuration.background.option.default',
                'tiled'    => 'anomaly.extension.section_block::configuration.background.option.tiled',
                'cover'    => 'anomaly.extension.section_block::configuration.background.option.cover',
                'parallax' => 'anomaly.extension.section_block::configuration.background.option.parallax',
            ],
        ],
    ],
    'justify_content'  => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'default_value' => 'none',
            'options'       => [
                'none'          => 'anomaly.extension.section_block::configuration.justify_content.option.none',
                'left'          => 'anomaly.extension.section_block::configuration.justify_content.option.left',
                'center'        => 'anomaly.extension.section_block::configuration.justify_content.option.center',
                'right'         => 'anomaly.extension.section_block::configuration.justify_content.option.right',
                'space_between' => 'anomaly.extension.section_block::configuration.justify_content.option.space_between',
                'space_around'  => 'anomaly.extension.section_block::configuration.justify_content.option.space_around',
                'space_evenly'  => 'anomaly.extension.section_block::configuration.justify_content.option.space_evenly',
            ],
        ],
    ],
    'alignment'        => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'default_value' => 'top',
            'options'       => [
                'top'    => 'anomaly.extension.section_block::configuration.alignment.option.top',
                'middle' => 'anomaly.extension.section_block::configuration.alignment.option.middle',
                'bottom' => 'anomaly.extension.section_block::configuration.alignment.option.bottom',
            ],
        ],
    ],
];
