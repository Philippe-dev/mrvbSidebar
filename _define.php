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

$this->registerModule(
	/* Name        */	"mrvbSidebar",
	/* Description */	"customization of sidebar",
	/* Author      */	"Mirovinben",
	/* Version     */	'0.0.5',
	/* Properties  */	array(
							'permissions' => 'usage,contentadmin',
							'type'        => 'plugin',
							'support'     => 'http://www.mirovinben.fr/blog/index.php?post/id1532',
							'details'     => 'http://plugins.dotaddict.org/dc2/details/mrvbSidebar'
						)
);