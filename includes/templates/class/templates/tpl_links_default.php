<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=links.<br />
 * Displays conditions page.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_links_default.php  v1.3 $
 */
?>
<div class="centerColumn" id="links">
<h1 id="linksHeading"><?php echo HEADING_TITLE; ?></h1>

<div id="linksMainContent" class="content">
<?php
/**
 * require the html_define for the links page
 */
  require($define_page);
?>
</div>

<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>
