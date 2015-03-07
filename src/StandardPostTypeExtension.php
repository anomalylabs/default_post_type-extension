<?php namespace Anomaly\StandardPostTypeExtension;

use Anomaly\BlogModule\PostType\PostTypeExtension;

/**
 * Class StandardPostTypeExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\StandardPostTypeExtension
 */
class StandardPostTypeExtension extends PostTypeExtension
{

    /**
     * This extension provides the standard
     * post type for the blog module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blog::post_type.standard';

}
