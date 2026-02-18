<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_webgozar
 *
 * @copyright   Copyright (C) 2014 - 2026 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

$containerId = 'webgozar_' . (int) $module->id;
?>
<div id="<?php echo $containerId; ?>" class="webgozar<?php echo $moduleclass_sfx; ?> text-center">
<?php
switch ($type)
{
    case 'counter':
        if (!$showCounter)
        {
            echo '<div style="display:none">';
        }

        echo '<script src="https://www.webgozar.ir/c.aspx?Code=' . $code . '&amp;t=counter"></script>';

        if (!$showCounter)
        {
            echo '</div>';
        }
        break;

    case 'poll':
        echo '<script src="https://www.webgozar.ir/c.aspx?Code=' . $code . '&amp;t=poll"></script>';
        break;

    case 'newsletter':
        ?>
        <form action="https://www.webgozar.com/nletter/join.aspx" target="_blank" onsubmit="return sp(this);" name="wfrm" method="post">
            <fieldset>
                <input type="hidden" value="<?php echo $code; ?>" name="code">
                <input type="text" class="txts input-medium" name="wgname" placeholder="<?php echo Text::_('MOD_WEBGOZAR_NAME'); ?>">
                <?php if ($newsletterLayout === 'v') : ?>
                    <br>
                <?php endif; ?>
                <input type="email" class="txts input-medium" name="wgemail" dir="ltr" placeholder="<?php echo Text::_('MOD_WEBGOZAR_EMAIL'); ?>">
                <?php if ($newsletterLayout === 'v') : ?>
                    <br>
                <?php endif; ?>
                <button name="R1" type="submit" value="1" class="btn btn-small btn-primary"><?php echo Text::_('MOD_WEBGOZAR_SUBSCRIBE'); ?></button>
                <button name="R1" type="submit" value="0" class="btn btn-small btn-secondary"><?php echo Text::_('MOD_WEBGOZAR_UNSUBSCRIBE'); ?></button>
                <script src="https://webgozar.ir/scs/n2.js"></script>
            </fieldset>
        </form>
        <?php
        break;
}
?>
</div>
