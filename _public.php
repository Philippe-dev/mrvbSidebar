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
require_once dirname(__FILE__) . '/_widget.php';

class tplMrvbSidebar
{
    public static function mrvbOpenBlock($w)
    {
        return '<div class="mrvbBlock ' . $w->CSSclass . '">' . "\n";
    }

    public static function mrvbCloseBlock($w)
    {
        return '</div>' . "\n";
    }

    public static function mrvbInterBlocks($w)
    {
        return '</div>' . "\n" . '<div class="mrvbBlock ' . $w->CSSclass . '">' . "\n";
    }
}
