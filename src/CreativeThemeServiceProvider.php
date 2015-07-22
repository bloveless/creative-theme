<?php namespace Anomaly\CreativeTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class CreativeThemeServiceProvider
 *
 * @link          http://www.control4.com
 * @author        Brennon Loveless <brennon.loveless@gmail.com
 * @package       Anomaly\CreativeTheme
 */
class CreativeThemeServiceProvider extends AddonServiceProvider
{
    /**
     * Override views
     *
     * @var array
     */
    protected $overrides = [
        'anomaly.module.posts::posts/index' => 'theme::modules/posts/index',
        'anomaly.module.posts::posts/post'  => 'theme::modules/posts/post'
    ];
}