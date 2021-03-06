<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 Josh Dechant                                      |
// |                                                                      |
// | Portions Copyright (c) 2004 The zen-cart developers                  |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
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
// $Id: mzmt.php,v 1.000 2004-09-26 dreamscape Exp $
//
/*
  Create text & icons for geo zones and their tables following template below where
    $n = geo zone number (in the shipping module) and
    $j = table number

  MODULE_SHIPPING_MZMT_GEOZONE_$n_TEXT_TITLE
  MODULE_SHIPPING_MZMT_GEOZONE_$n_ICON
  MODULE_SHIPPING_MZMT_GEOZONE_$n_TABLE_$j_TEXT_WAY

  Sample is setup for a 3x3 table (3 Geo Zones with 3 Tables each)
*/

define('MODULE_SHIPPING_MZMT_TEXT_TITLE', 'MultiGeoZone MultiTable');
define('MODULE_SHIPPING_MZMT_TEXT_DESCRIPTION', 'Multiple geo zone shipping with multiple tables to each geo zone.');

define('MODULE_SHIPPING_MZMT_GEOZONE_1_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_1_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_1_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) - 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_1_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_1_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

define('MODULE_SHIPPING_MZMT_GEOZONE_2_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_2_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_2_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_2_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_2_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

define('MODULE_SHIPPING_MZMT_GEOZONE_3_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_3_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_3_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_3_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_3_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

define('MODULE_SHIPPING_MZMT_GEOZONE_4_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_4_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_4_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_4_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_4_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

define('MODULE_SHIPPING_MZMT_GEOZONE_5_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_5_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_5_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_5_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_5_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

define('MODULE_SHIPPING_MZMT_GEOZONE_6_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_6_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_6_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_6_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_6_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

define('MODULE_SHIPPING_MZMT_GEOZONE_7_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_7_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_7_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_7_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_7_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

define('MODULE_SHIPPING_MZMT_GEOZONE_8_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_8_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_8_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_8_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_8_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

define('MODULE_SHIPPING_MZMT_GEOZONE_9_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_9_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_9_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_9_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_9_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

define('MODULE_SHIPPING_MZMT_GEOZONE_10_TEXT_TITLE', 'Egypt Post');
define('MODULE_SHIPPING_MZMT_GEOZONE_10_ICON', 'egypt-post.gif');
define('MODULE_SHIPPING_MZMT_GEOZONE_10_TABLE_1_TEXT_WAY', 'SAL (Surface Air Lifted) 4-5 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_10_TABLE_2_TEXT_WAY', 'Standard Air Mail - 2 weeks');
define('MODULE_SHIPPING_MZMT_GEOZONE_10_TABLE_3_TEXT_WAY', 'Expedite Air Service - 4 business days');

?>
