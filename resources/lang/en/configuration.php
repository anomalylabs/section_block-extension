<?php

return [
    'height'           => [
        'name'         => 'Height',
        'instructions' => 'Specify the section height. Defaults to <strong>auto</strong>.',
    ],
    'background_color' => [
        'name'         => 'Background Color',
        'instructions' => 'Specify the background color.',
    ],
    'layout'           => [
        'name'         => 'Layout',
        'instructions' => 'Specify the section layout.',
        'option'       => [
            'standard'   => 'Standard',
            'full_width' => 'Full Width',
            'stretched'  => 'Stretched',
        ],
    ],
    'background'       => [
        'name'         => 'Background Style',
        'instructions' => 'Specify the background style.',
        'option'       => [
            'default'  => 'Default',
            'tiled'    => 'Tiled',
            'cover'    => 'Cover',
            'parallax' => 'Parallax',
        ],
    ],
    'justify_content'  => [
        'name'         => 'Justify Content',
        'instructions' => 'Specify the content justification.',
        'option'       => [
            'none'          => 'None',
            'left'          => 'Left',
            'center'        => 'Center',
            'right'         => 'Right',
            'space_between' => 'Space Between',
            'space_around'  => 'Space Around',
            'space_evenly'  => 'Space Evenly',
        ],
    ],
    'alignment'        => [
        'name'         => 'Vertical Alignment',
        'instructions' => 'Specify the vertical content alignment.',
        'option'       => [
            'top'    => 'Top',
            'middle' => 'Middle',
            'bottom' => 'Bottom',
        ],
    ],
];
