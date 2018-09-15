<?php namespace Anomaly\SectionBlockExtension\Block;

use Anomaly\SectionBlockExtension\Block\Contract\BlockInterface;
use Anomaly\Streams\Platform\Model\SectionBlock\SectionBlockBlocksEntryModel;

/**
 * Class BlockModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class BlockModel extends SectionBlockBlocksEntryModel implements BlockInterface
{

    /**
     * Eager load these relations.
     *
     * @var array
     */
    protected $with = [
        'content',
        'backgroundImage',
    ];
}
