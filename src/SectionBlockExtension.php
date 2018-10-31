<?php namespace Anomaly\SectionBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\SectionBlockExtension\Block\BlockModel;

/**
 * Class SectionBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SectionBlockExtension extends BlockExtension
{

    /**
     * The block category.
     *
     * @var string
     */
    protected $category = 'layout';

    /**
     * This extension provides a simple
     * section block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.section';

    /**
     * The block content.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.section_block::content';

    /**
     * The block wrapper.
     *
     * @var string
     */
    protected $wrapper = 'anomaly.extension.section_block::wrapper';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
