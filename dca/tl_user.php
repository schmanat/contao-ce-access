<?php

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  terminal42 gmbh 2009-2013
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Palettes
 */

$GLOBALS['TL_DCA']['tl_user']['palettes']['extend'] = preg_replace('@([,;])(modules[,;])@', '$1elements,$2', $GLOBALS['TL_DCA']['tl_user']['palettes']['extend']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['custom'] = preg_replace('@([,;])(modules[,;])@', '$1elements,$2', $GLOBALS['TL_DCA']['tl_user']['palettes']['custom']);


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_user']['fields']['elements'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['elements'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options_callback'        => array('CeAccess', 'getContentElements'),
	'reference'               => &$GLOBALS['TL_LANG']['CTE'],
	'eval'                    => array('multiple'=>true),
);
