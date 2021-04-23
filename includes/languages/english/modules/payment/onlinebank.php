<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2008 Mariusz Adamczyk                                  |
// |                                                                      |
// | http://www.electronics.x24hr.com/zc/                                 |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: ONLINEBANK.php 1969 2008-08-17 06:57:21
//


  define('MODULE_PAYMENT_ONLINEBANK_TEXT_EMAIL_FOOTER', 
  "Please use the following details to transfer your total order value:\n\n" .

  "\nBank Name:            " . MODULE_PAYMENT_ONLINEBANK_BANKNAM .
  "\nAccount Name:         " . MODULE_PAYMENT_ONLINEBANK_ACCNAM . 
  "\nAccount No.:          " . MODULE_PAYMENT_ONLINEBANK_ACCNUM .
  "\nSort Code:            " . MODULE_PAYMENT_ONLINEBANK_SRTCOD .  
 
  "\n\nThanks for your order which will ship immediately we receive payment in the above account. Please do not forget to mention your <b>[Order Confirmation No: xxx]</b> in the transaction remark when transacting from your Bank Account. Visa or MasterCard transactions can be done to the above account also.\n");

  define('MODULE_PAYMENT_ONLINEBANK_TEXT_TITLE', 'Online Bank Transfer');
   define('MODULE_PAYMENT_ONLINEBANK_TEXT_DESCRIPTION', 
'<BR><font size="2" color="#000000">Please use the following details to transfer your total order value:<br>' .
"<br>\nBank Name:  <br>  " . MODULE_PAYMENT_ONLINEBANK_BANKNAM .
  "<br>\nSort Code:<br> " . MODULE_PAYMENT_ONLINEBANK_SRTCOD .
"<br>\nAccount Name:<br> " . MODULE_PAYMENT_ONLINEBANK_ACCNAM .
  "<br>\nAccount No.:<br>  " . MODULE_PAYMENT_ONLINEBANK_ACCNUM .
  
  
  '</font><p>Thanks for your order which will ship immediately we receive payment in the above account. Please do not forget to mention your <b>[Order Confirmation No: xxx]</b> in the transaction remark when transacting from your Bank Account.');
?>
