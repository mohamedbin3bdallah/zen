<?php
/**
 * Absolute Links Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *
 * @version $Id: tpl_absolute_links.php  2007-07-09 06:06:06Z tolefairy
 * enhanced sidebox with vertical scrollbar  2010-01-09 by johnboycr
 */

$content = '<div id="absolutelinksContent" class="sideBoxContent betterCategories" style="height: 120px; ">';

/* Your html and/or javascript code goes between the <div style> and the </div> the are 
 * between the sigle quotes of the $content .= 
 * make the sidebox the height you want by changing the height in the $content line above
 * ensure that the height in the following <div> is 10px less than the first
 */
 
$content .= '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="142" height="119" id="free-flash-banner"><param name="movie" value="http://free.flashbannernow.com/freebanner_mr.swf?bid=aaeqstb" /><param name="allowScriptAccess" value="always" /><!--[if !IE]>--><object type="application/x-shockwave-flash" data="http://free.flashbannernow.com/freebanner_mr.swf?bid=aaeqstb" width="142" height="119"><param name="movie" value="http://free.flashbannernow.com/freebanner_mr.swf?bid=aaeqstb" /><param name="allowScriptAccess" value="always" /><!--<![endif]--><a href="http://www.flashbannernow.com/" title="Make flash banner @ FlashBannerNow.com">Make flash banner</a><!--[if !IE]>--></object><!--<![endif]--></object>

';

$content .= '</div>';

?>
