<?php
/**
 * Quantity Discounts Promotion Page
 * 
 * @package page
 * @copyright Copyright 2007 That Software Guy
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_php.php 1.3 $
 */

  $_SESSION['navigation']->remove_current_page();

  require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));

// include template specific file name defines
  $define_page = zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_QUANTITYDISCOUNTS_PROMO, 'false');

  $breadcrumb->add(NAVBAR_TITLE);
  
  $value = "ot_quantity_discount.php";
  include_once(zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] .
          '/modules/order_total/', $value, 'false'));
  include_once(DIR_WS_MODULES . "order_total/" . $value);
  $discount = new ot_quantity_discount();
  $marketing_data = array(); 
  if ($discount->check() > 0) { 
     $marketing_data = $discount->get_discount_info();
  }
?>
