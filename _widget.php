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

dcCore::app()->addBehavior('initWidgets', ['mrvbSidebarBehaviors','initWidgets']);

class mrvbSidebarBehaviors
{
    public static function initWidgets($w)
    {
        $w->create('mrvbOpenBlock', __('Mrvb: sidebar / block #1'), ['tplMrvbSidebar','mrvbOpenBlock'], null, __('opening block'));
        $w->mrvbOpenBlock->setting(
            'CSSclass',
            __('CSS class:'),
            '',
            'text'
        );

        $w->create('mrvbInterBlocks', __('Mrvb: sidebar / block #2'), ['tplMrvbSidebar','mrvbInterBlocks'], null, __('closing block + opening block'));
        $w->mrvbInterBlocks->setting(
            'CSSclass',
            __('CSS class:'),
            '',
            'text'
        );

        $w->create('mrvbCloseBlock', __('Mrvb: sidebar / block #3'), ['tplMrvbSidebar','mrvbCloseBlock'], null, __('closing block'));
    }
}
