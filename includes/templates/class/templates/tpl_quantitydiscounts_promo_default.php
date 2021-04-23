<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=quantitydiscounts_promo<br />
 * Displays conditions page.
 *
 * @package templateSystem
 * @copyright Copyright 2007 That Software Guy
 * @copyright Portions Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */
?>
<div class="centerColumn" id="quantitydiscounts_promo">
<h1 id="quantitydiscountsPromoHeading"><?php echo HEADING_TITLE; ?></h1>

<div id="quantitydiscountsPromoMainContent" class="content">
<?php
/**
 * require the html_define for the quantity discounts promo page
 */
  require($define_page);
?>
<?php 
  if (count($marketing_data) > 0) { 
     echo '<div class="content" id="quantitydiscountsDiscountList">' . "\n";
     echo '<ul>' . "\n"; 
     for ($i=0, $n=count($marketing_data); $i<$n; $i++) {
        echo '<li>'.$marketing_data[$i] . "</li>" . "\n"; 
     }
     echo '</ul>' . "\n"; 
     echo '<br /></div>';
     echo '<br class="clearBoth" />'; 
  } else {
     echo '<div class="content" id="quantitydiscountsDiscountEmptyList">' . "\n";
     echo '<p>' . NO_QUANTITYDISCOUNTS_DISCOUNTS . '</p>'; 
     echo '</div>' . "\n";
  }
?>
</div>

<div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>
