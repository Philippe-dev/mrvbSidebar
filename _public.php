<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of mrvbSidebar, a plugin for Dotclear 2
#
# © Mirovinben (http://www.mirovinben.fr/)
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) { return; }
require_once dirname(__FILE__).'/_widget.php';

class tplMrvbSidebar
{
	public static function mrvbOpenBlock($w)
	{
		global $core;
		return '<div class="mrvbBlock '.$w->CSSclass.'">'."\n";
	}
	
	public static function mrvbCloseBlock($w)
	{
		global $core;
		return '</div>'."\n";
	}

	public static function mrvbInterBlocks($w)
	{
		global $core;
		return '</div>'."\n".'<div class="mrvbBlock '.$w->CSSclass.'">'."\n";
	}
}