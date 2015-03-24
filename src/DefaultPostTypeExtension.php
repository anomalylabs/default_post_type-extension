<?php namespace Anomaly\DefaultPostTypeExtension;

use Anomaly\BlogModule\PostType\PostTypeExtension;

/**
 * Class DefaultPostTypeExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\DefaultPostTypeExtension
 */
class DefaultPostTypeExtension extends PostTypeExtension
{

    /**
     * This extension provides the default
     * post type for the blog module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blog::post_type.default';

}
