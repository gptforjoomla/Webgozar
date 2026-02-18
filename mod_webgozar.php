<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_webgozar
 *
 * @copyright   Copyright (C) 2014 - 2026 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

$moduleclass_sfx  = htmlspecialchars((string) $params->get('moduleclass_sfx', ''), ENT_QUOTES, 'UTF-8');
$type             = (string) $params->get('type', 'counter');
$newsletterLayout = (string) $params->get('newsletter', 'v');
$code             = (int) $params->get('code', 0);
$showCounter      = (bool) $params->get('counter', 1);

if ($code > 0)
{
    require ModuleHelper::getLayoutPath('mod_webgozar', $params->get('layout', 'default'));
}
