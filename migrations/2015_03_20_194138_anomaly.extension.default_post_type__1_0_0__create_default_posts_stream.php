<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionDefaultPostType_1_0_0_CreateDefaultPostsStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionDefaultPostType_1_0_0_CreateDefaultPostsStream extends Migration
{

    /**
     * The addon stream.
     *
     * @var array
     */
    protected $stream = [
        'slug'   => 'default_posts',
        'locked' => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'content'
    ];

}
