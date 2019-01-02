<?php namespace Anomaly\SectionBlockExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\View\ViewIncludes;

/**
 * Class SectionBlockExtensionServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SectionBlockExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * Boot the addon.
     *
     * @param ViewIncludes $includes
     */
    public function boot(ViewIncludes $includes)
    {
        $includes->add('head', 'anomaly.extension.section_block::include');
    }

}
