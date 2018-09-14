<?php

return [
    'size' => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'options' => [
                'standard'   => 'anomaly.extension.section_block::configuration.size.option.standard',
                'full_width' => 'anomaly.extension.section_block::configuration.size.option.full_width',
                'stretched'  => 'anomaly.extension.section_block::configuration.size.option.stretched',
            ],
        ],
    ],
    'type' => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'options' => [
                'default' => 'anomaly.extension.section_block::configuration.size.option.default',
            ],
        ],
    ],
];
