<?php
/**
 * @package     SIJ.Tristan
 * @subpackage  mod_laatste_nieuws
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$title = $module->title;
$color = $params->get('color');

// Include the latest functions only once
JLoader::register('ModLaatsteNieuwsHelper', __DIR__ . '/helper.php');

$list            = ModLaatsteNieuwsHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

// Add CSS
$document = JFactory::getDocument();
$document->addStyleSheet(JUri::base().'modules/mod_laatste_nieuws/tmpl/style.css');

require JModuleHelper::getLayoutPath('mod_laatste_nieuws', $params->get('layout', 'default'));
