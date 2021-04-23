<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
<STYLE type="text/css" media="screen">
.CategoryTable 
{
	BORDER:0px solid black;
	WIDTH: 100%;
}
.CategoryCell
{
	TEXT-ALIGN: left;
	BORDER:0px solid black;
}
.CategoryLink
{
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: blue;
	FONT-SIZE:8pt;
	FONT-WEIGHT: bold;
}
.SubCategoryLink
{
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: blue;
	FONT-SIZE:6pt;
}
.LinkListingTable
{
	BORDER:1px solid black;
	WIDTH: 100%;
}
.LinkListing
{
	MARGIN-TOP: 5px;
	MARGIN-BOTTOM: 5px;
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: black;
	FONT-SIZE:8pt;
}
.LinkTitle
{
	MARGIN-TOP: 5px;
	MARGIN-BOTTOM: 5px;
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: blue;
	FONT-SIZE:8pt;
	FONT-WEIGHT: bold;
}
.LinkDescription
{
	MARGIN-TOP: 5px;
	MARGIN-BOTTOM: 5px;
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: black;
	FONT-SIZE:8pt;
}
.Link
{
	MARGIN-TOP: 3px;
	MARGIN-BOTTOM: 3px;
}
.LinkURL
{
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: blue;
	FONT-SIZE:8pt;
	FONT-WEIGHT: bold;
}
.NavigationText
{
	MARGIN-TOP: 5px;
	MARGIN-BOTTOM: 5px;
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: black;
	FONT-SIZE:8pt;
	TEXT-ALIGN: center;
}
.NavigationLinks
{
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: blue;
}
.TopNavigation
{
	MARGIN-TOP: 5px;
	MARGIN-BOTTOM: 5px;
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: black;
	FONT-SIZE:8pt;
	TEXT-ALIGN: left;
}
.TopNavigationLinks
{
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	COLOR: blue;
}

.SearchTerm
{

	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	FONT-SIZE:7pt;
}
.SearchSelectBox
{
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	FONT-SIZE:7pt;
}
.SearchSubmit
{
	FONT-FAMILY:verdana, arial, helvetica, sans-serif;
	FONT-SIZE:7pt;
}
</STYLE>

</head>

<body>
<?php
// # THE FOLLOWING BLOCK IS USED TO RETRIEVE AND DISPLAY LINK INFORMATION.
// # PLACE THIS ENTIRE BLOCK IN THE AREA YOU WANT THE DATA TO BE DISPLAYED.

// # BackLinkSpider user key:
$UserKey ="BA-3099SA-21";

// # MODIFY THE VARIABLES BELOW:

// # The following variable defines how many links to display per page
$LinksPerPage = "25";

// # The following variable defines how many columns are used to display categories
$CategoryColumns = "2";

// # The following variable defines whether links are opened in a new window
// # (1 = Yes, 0 = No)
$OpenInNewWindow = "0";

// # DO NOT MODIFY ANYTHING ELSE BELOW THIS LINE!
// ----------------------------------------------

$QueryString  = "script=php";
$QueryString .= "&UserKey=" .urlencode($UserKey);
$QueryString .= "&CategoryColumns=" .urlencode($CategoryColumns);
$QueryString .= "&LinksPerPage=" .urlencode($LinksPerPage);
$QueryString .= "&OpenInNewWindow=" .urlencode($OpenInNewWindow);
$QueryString .= "&siteid=5465" ; 

foreach ($_GET as $key => $value) {
	$value = urlencode(stripslashes($value));
	$QueryString .= "&$key=$value";
}

// congfigure our headers
if(intval(ini_get('allow_url_fopen')) && function_exists('readfile')) {
	if(!@readfile("http://www.backlinkspider.com/generate.links.php?".$QueryString)) {
		echo "Error processing request";
	}
}
elseif(intval(ini_get('allow_url_fopen')) && function_exists('file')) {
	if(!($content = @file("http://www.backlinkspider.com/generate.links.php?".$QueryString))) {
		echo "Error processing request";
	}
	else {
		echo @join('', $content);
	}
}
elseif(function_exists('curl_init')) {
	$ch = curl_init ("http://www.backlinkspider.com/generate.links.php?".$QueryString);
	curl_setopt ($ch, CURLOPT_HEADER, 0);
	curl_exec ($ch);

	if(curl_error($ch))
		echo "Error processing request";

	curl_close ($ch);
}
else {
	echo "Your web hosting provider has disabled all functions for handling remote pages pages and as a result the BackLinkSpider software will not function on your web site.";
}
echo "<input type='hidden' name='userkey' value='".$UserKey."'>";
?>
                        
</body>

</html>
