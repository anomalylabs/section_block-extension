<?php

return [
    'layout'          => [
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
    'justify_content' => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'default_value' => 'left',
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
];
