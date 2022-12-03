<?php
/**
 * @brief mrvbSidebar, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Mirovinben (https://www.mirovinben.fr/)
 *
 * @copyright GPL-2.0 [https://www.gnu.org/licenses/gpl-2.0.html]
 */
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'mrvbSidebar',
    'customization of sidebar',
    'Mirovinben and contributors',
    '1.0',
    [
        'requires'    => [['core', '2.24']],
        'permissions' => dcCore::app()->auth->makePermissions([dcAuth::PERMISSION_CONTENT_ADMIN]),
        'type'        => 'plugin',
        'support'     => 'https://www.mirovinben.fr/blog/index.php?post/id1532',
        'details'     => 'https://plugins.dotaddict.org/dc2/details/mrvbSidebar',
    ]
);
