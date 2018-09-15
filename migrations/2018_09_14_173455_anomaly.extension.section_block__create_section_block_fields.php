<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionSectionBlockCreateSectionBlockFields
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionSectionBlockCreateSectionBlockFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'content'          => 'anomaly.field_type.blocks',
        'background_image' => 'anomaly.field_type.file',
    ];

}
