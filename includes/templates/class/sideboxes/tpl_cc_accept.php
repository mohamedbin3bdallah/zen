<?php
/**
 * tpl_cc_accept.php
 *
 * Loaded automatically by index.php?main_page=account_edit.<br />
 * Displays information related to a single specific order
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: tpl_cc_accept.php v 1.2 2006-09-06 
 * Originally copied from featured.php and modified by Carter Harris
 * Upgraded to work with Zen Cart 1.3 by kuroi
 */

$content = '';
$content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">' . "\n";
$content .= '<img id="ccVisa" class="cc_img" src="images/cc_logos/logo_ccVisa.gif" alt="Visa.gif" />' . "\n" .
            '<img id="ccAmex" class="cc_img" src="images/cc_logos/logo_ccAmex.gif" alt="Amex.gif" />' . "\n" .
            '<img id="ccDiscover" class="cc_img" src="images/cc_logos/logo_ccDiscover.gif" alt="Discover.gif" />' . "\n" .
            '<img id="ccMC" class="cc_img" src="images/cc_logos/logo_ccMC.gif" alt="MC.gif" />' . "\n" .
            '<img id="ccPaypal" class="cc_img" src="images/cc_logos/ppslv2.gif" alt="Paypal.gif" />' . "\n";
$content .= '</div>' . "\n";
?>