<?php

return [
    'height' => \Anomaly\BlocksModule\Block\Style\HeightFieldType::class,

    'margin_top'    => \Anomaly\BlocksModule\Block\Style\MarginFieldType::class,
    'margin_left'   => \Anomaly\BlocksModule\Block\Style\MarginFieldType::class,
    'margin_right'  => \Anomaly\BlocksModule\Block\Style\MarginFieldType::class,
    'margin_bottom' => \Anomaly\BlocksModule\Block\Style\MarginFieldType::class,

    'padding_top'    => \Anomaly\BlocksModule\Block\Style\PaddingFieldType::class,
    'padding_left'   => \Anomaly\BlocksModule\Block\Style\PaddingFieldType::class,
    'padding_right'  => \Anomaly\BlocksModule\Block\Style\PaddingFieldType::class,
    'padding_bottom' => \Anomaly\BlocksModule\Block\Style\PaddingFieldType::class,

    'border_radius_top_left'     => \Anomaly\BlocksModule\Block\Style\BorderRadiusFieldType::class,
    'border_radius_top_right'    => \Anomaly\BlocksModule\Block\Style\BorderRadiusFieldType::class,
    'border_radius_bottom_left'  => \Anomaly\BlocksModule\Block\Style\BorderRadiusFieldType::class,
    'border_radius_bottom_right' => \Anomaly\BlocksModule\Block\Style\BorderRadiusFieldType::class,

    'background_image' => \Anomaly\BlocksModule\Block\Style\BackgroundImageFieldType::class,
    'background_color' => \Anomaly\BlocksModule\Block\Style\BackgroundColorFieldType::class,

    'top_divider'             => \Anomaly\BlocksModule\Block\Style\DividerFieldType::class,
    'top_divider_color'       => \Anomaly\BlocksModule\Block\Style\DividerColorFieldType::class,
    'top_divider_arrangement' => \Anomaly\BlocksModule\Block\Style\DividerArrangementFieldType::class,

    'bottom_divider'                   => \Anomaly\BlocksModule\Block\Style\DividerFieldType::class,
    'bottom_divider_color'             => \Anomaly\BlocksModule\Block\Style\DividerColorFieldType::class,
    'bottom_divider_arrangement'       => \Anomaly\BlocksModule\Block\Style\DividerArrangementFieldType::class,
    'bottom_divider_flip_horizontally' => \Anomaly\BlocksModule\Block\Style\DividerFlipHorizontallyFieldType::class,

    'css_id'     => \Anomaly\BlocksModule\Block\Style\CssIdFieldType::class,
    'css_class'  => \Anomaly\BlocksModule\Block\Style\CssClassFieldType::class,
    'custom_js'  => \Anomaly\BlocksModule\Block\Style\CustomJsFieldType::class,
    'custom_css' => \Anomaly\BlocksModule\Block\Style\CustomCssFieldType::class,

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
    'alignment'       => [
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
