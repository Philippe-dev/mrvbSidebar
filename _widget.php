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

$core->addBehavior('initWidgets', array('mrvbSidebarBehaviors','initWidgets'));
	
class mrvbSidebarBehaviors
{
	public static function initWidgets($w)
	{
		$w->create('mrvbOpenBlock',__('Mrvb: sidebar / block #1'), array('tplMrvbSidebar','mrvbOpenBlock'),null,__('opening block'));
		$w->mrvbOpenBlock->setting('CSSclass',__('CSS class:'),
			'','text');

		$w->create('mrvbInterBlocks',__('Mrvb: sidebar / block #2'), array('tplMrvbSidebar','mrvbInterBlocks'),null,__('closing block + opening block'));
		$w->mrvbInterBlocks->setting('CSSclass',__('CSS class:'),
			'','text');

		$w->create('mrvbCloseBlock',__('Mrvb: sidebar / block #3'), array('tplMrvbSidebar','mrvbCloseBlock'),null,__('closing block'));
	}
}