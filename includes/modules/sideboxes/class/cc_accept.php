<?php
/**
 * cc_accept.php
 *
 * Loaded automatically by index.php?main_page=account_edit.<br />
 * Displays information related to a single specific order
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: cc_accept.php v 1.2 2006-09-06 
 * Originally copied from featured.php and modified by Carter Harris
 * Upgraded to work with Zen Cart 1.3 by kuroi
 */

// test if box should display
  $show_cc_accept = true;

  if ($show_cc_accept == true) {
      require($template->get_template_dir('tpl_cc_accept.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_cc_accept.php');
			
			$title =  BOX_HEADING_CC_ACCEPT;
  		$title_link = false;
			
      require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);
 }
?>