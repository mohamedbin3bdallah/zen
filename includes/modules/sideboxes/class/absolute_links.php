<?php
/**
 * absolute links sidebox - displays sidebox with absolute links on all pages EXCEPT SSL pages
 *
 * @package templateSystem
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: absolute_links.php 2007-07-09 06:06:06Z  tolefairy $
 *
 * Displays on non ssl pages only-to avoid secure/non-secure warning
 */

  if ($request_type == 'NONSSL') {

    require($template->get_template_dir('tpl_absolute_links.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_absolute_links.php');

    $title = BOX_HEADING_ABSOLUTE_LINKS;
    $left_corner = false;
    $right_corner = false;
    $right_arrow = false;
    $title_link = false;

    require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);

  }

?>

