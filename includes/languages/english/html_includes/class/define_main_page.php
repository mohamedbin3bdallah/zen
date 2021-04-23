<html dir="rtl">

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 2</title>
</head>

<body>

<p class="MsoNormal" style="margin-bottom:12.0pt;text-align:justify;direction:ltr;
unicode-bidi:embed"><span ><font size="2">We invite 
you to browse our wide selection of light fixtures. Here you can acquire 
unique outdoor lighting, pendant lighting, lampshades, lava lamps, floor lamps, stained 
glass lamps, wrought iron blown glass lamps and more. Beside light fixtures we also offer elective home decor 
items.</font></span></p>



<p dir="ltr" class="MsoNormal" style="text-align: justify; direction: ltr; unicode-bidi: embed; margin-bottom: 12.0pt">
<span><font size="2">We are in business since April 2003 as a dealer on USA. Lighting Art design involved, added 
great strength to our niche. Our manufacturers receive our designs and make 
these handmade lightings EXCLUSIVELY for us. In these UNIQUE lamps, no machines 
involved, just hand tools!</font></span></p>
<p dir="ltr" class="MsoNormal" style="text-align: justify; direction: ltr; unicode-bidi: embed; margin-bottom: 12.0pt">
<span><font size="2">We offer a wide range of lighting art including 
contemporary, Islamic, Egyptian, Arabian and Moroccan styles.</font></span></p>
<p class="MsoNormal" style="margin-bottom:12.0pt;text-align:justify;direction:ltr;
unicode-bidi:embed" dir="ltr"><span ><font size="2">Beside 
our own designs, we can implement <b>any <i>CUSTOM</i> lamp design</b>. You can choose to 
make your lamp of brass, wrought iron or glass. Just go ahead and upload your 
project <a href="http://click2egypt.com/zahereen/index.php?main_page=page&id=3">HERE</a>. We will get back to you soon with a <i>non-resistible quote</i>.</i>.</font></span></p>


<script type="text/javascript">

/***********************************************
* Book Flip slideshow script- © Ger Versluis 2003
* Permission granted to DynamicDrive.com to feature script
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

/********************************************************
	Create a div with transparent place holder in your html	
	<div id="Book" style="position:relative">
		<img src="http://www.click2egypt.com/zahereen/images/slide/placeholder.gif" width="400" height="400">
	</div>
	width = 2*book image width +4 height = book image height+2

	Insert onload in body tag
		<body onload="ImageBook()">	
*********************************************************/

// 7 variables to control behavior
	var Book_Image_Width=230;
	var Book_Image_Height=306.67;
	var Book_Border=true;
	var Book_Border_Color="gray";
	var Book_Speed=15;
	var Book_NextPage_Delay=1500; //1 second=1000
	var Book_Vertical_Turn=0;	

// array to specify images and optional links. At least 4
// If Link is not needed keep it ""


	Book_Image_Sources=new Array(
"http://www.click2egypt.com/zahereen/images/slide/BR326_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/BR326_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/B165_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/B165_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/B164_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/B164_01_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/B161_07_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/B161_07_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/B162_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/B162_03_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/BR313_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/BR313_03_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/B157_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/B157_02_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/BR297_04_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/BR297_04_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/BR309.jpg","http://www.click2egypt.com/zahereen/images/slide/BR309.jpg",
"http://www.click2egypt.com/zahereen/images/slide/B163_07_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/B163_07_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/BR307_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/BR307_02_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/BR305_04_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/BR305_04_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/BR304_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/BR304_01_LRG.jpg",

"http://www.click2egypt.com/zahereen/images/slide/m3lk.jpg","http://www.click2egypt.com/zahereen/images/slide/m3lk.jpg",
"http://www.click2egypt.com/zahereen/images/slide/SMoil-dr.jpg","http://www.click2egypt.com/zahereen/images/slide/SMoil-dr.jpg",
"http://www.click2egypt.com/zahereen/images/slide/blls-ring.jpg","http://www.click2egypt.com/zahereen/images/slide/blls-ring.jpg",
"http://www.click2egypt.com/zahereen/images/slide/gsChndlr.jpg","http://www.click2egypt.com/zahereen/images/slide/gsChndlr.jpg",
"http://www.click2egypt.com/zahereen/images/slide/bt-scon.jpg","http://www.click2egypt.com/zahereen/images/slide/bt-scon.jpg",
"http://www.click2egypt.com/zahereen/images/slide/mshkRB.jpg","http://www.click2egypt.com/zahereen/images/slide/mshkRB.jpg",
"http://www.click2egypt.com/zahereen/images/slide/morHR.jpg","http://www.click2egypt.com/zahereen/images/slide/morHR.jpg",
"http://www.click2egypt.com/zahereen/images/slide/naomi.jpg","http://www.click2egypt.com/zahereen/images/slide/naomi.jpg",
"http://www.click2egypt.com/zahereen/images/slide/tsktMTR.jpg","http://www.click2egypt.com/zahereen/images/slide/tsktMTR.jpg",
"http://www.click2egypt.com/zahereen/images/slide/morMTLG.jpg","http://www.click2egypt.com/zahereen/images/slide/morMTLG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/krts.jpg","http://www.click2egypt.com/zahereen/images/slide/krts.jpg",
"http://www.click2egypt.com/zahereen/images/slide/bdngm.jpg","http://www.click2egypt.com/zahereen/images/slide/bdngm.jpg",
"http://www.click2egypt.com/zahereen/images/slide/bdfs.jpg","http://www.click2egypt.com/zahereen/images/slide/bdfs.jpg",
"http://www.click2egypt.com/zahereen/images/slide/oct-qnd.jpg","http://www.click2egypt.com/zahereen/images/slide/oct-qnd.jpg",
"http://www.click2egypt.com/zahereen/images/slide/bll-shd.jpg","http://www.click2egypt.com/zahereen/images/slide/bll-shd.jpg",
"http://www.click2egypt.com/zahereen/images/slide/burg.jpg","http://www.click2egypt.com/zahereen/images/slide/burg.jpg",
"http://www.click2egypt.com/zahereen/images/slide/crys-chndl.jpg","http://www.click2egypt.com/zahereen/images/slide/crys-chndl.jpg",
"http://www.click2egypt.com/zahereen/images/slide/bll-rbs.jpg","http://www.click2egypt.com/zahereen/images/slide/bll-rbs.jpg",
"http://www.click2egypt.com/zahereen/images/slide/kz-abj.jpg","http://www.click2egypt.com/zahereen/images/slide/kz-abj.jpg",
"http://www.click2egypt.com/zahereen/images/slide/bll-nshr.jpg","http://www.click2egypt.com/zahereen/images/slide/bll-nshr.jpg",
"http://www.click2egypt.com/zahereen/images/slide/tbl-mbkh.jpg","http://www.click2egypt.com/zahereen/images/slide/tbl-mbkh.jpg",
"http://www.click2egypt.com/zahereen/images/slide/dbl-kz_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/dbl-kz_01_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/bubbles.jpg","http://www.click2egypt.com/zahereen/images/slide/bubbles.jpg",
		
"http://www.click2egypt.com/zahereen/images/slide/3sq-up_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/3sq-up_02_LRG.jpg",
				"http://www.click2egypt.com/zahereen/images/slide/abjora-globe_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/abjora-globe_01_LRG.jpg",
						"http://www.click2egypt.com/zahereen/images/slide/alibaba-kaboli_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/alibaba-kaboli_01_LRG.jpg",
								"http://www.click2egypt.com/zahereen/images/slide/amood_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/amood_01_LRG.jpg",
										"http://www.click2egypt.com/zahereen/images/slide/an-mslb-fus_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/an-mslb-fus_02_LRG.jpg",
												"http://www.click2egypt.com/zahereen/images/slide/ball-silver_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/ball-silver_02_LRG.jpg",
														"http://www.click2egypt.com/zahereen/images/slide/blown3-b_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/blown3-b_01_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/sultan_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/sultan_03_LRG.jpg",
																"http://www.click2egypt.com/zahereen/images/slide/blown-tbl_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/blown-tbl_01_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/Cnv0281_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Cnv0281_02_LRG.jpg",

																		"http://www.click2egypt.com/zahereen/images/slide/blw-btt-r_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/blw-btt-r_01_LRG.jpg",

"http://www.click2egypt.com/zahereen/images/slide/shabah_05_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/shabah_05_LRG.jpg",

																				"http://www.click2egypt.com/zahereen/images/slide/blw-fr-mod_04_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/blw-fr-mod_04_LRG.jpg",
											"http://www.click2egypt.com/zahereen/images/slide/s-g-huge-chnd_06_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/s-g-huge-chnd_06_LRG.jpg",
											"http://www.click2egypt.com/zahereen/images/slide/blw-hl-clr_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/blw-hl-clr_01_LRG.jpg",

"http://www.click2egypt.com/zahereen/images/slide/qndl-tnzeel_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/qndl-tnzeel_03_LRG.jpg",

																								"http://www.click2egypt.com/zahereen/images/slide/blw-pear_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/blw-pear_01_LRG.jpg",

"http://www.click2egypt.com/zahereen/images/slide/mishk-pndnt_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/mishk-pndnt_03_LRG.jpg",
																										"http://www.click2egypt.com/zahereen/images/slide/blw-st-am_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/blw-st-am_01_LRG.jpg",
																												"http://www.click2egypt.com/zahereen/images/slide/boat-lamp_05_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/boat-lamp_05_LRG.jpg",
																														"http://www.click2egypt.com/zahereen/images/slide/bomfonira_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/bomfonira_02_LRG.jpg",
																																"http://www.click2egypt.com/zahereen/images/slide/brml-nksh-m_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/brml-nksh-m_02_LRG.jpg",
																																		"http://www.click2egypt.com/zahereen/images/slide/brml-rbs-m_09_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/brml-rbs-m_09_LRG.jpg",
																																				"http://www.click2egypt.com/zahereen/images/slide/btrmn-cndlr_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/btrmn-cndlr_01_LRG.jpg",
																																						"http://www.click2egypt.com/zahereen/images/slide/chndlr-sil_04_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/chndlr-sil_04_LRG.jpg",
																																								"http://www.click2egypt.com/zahereen/images/slide/Cnv0268_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Cnv0268_LRG.jpg",
																																										"http://www.click2egypt.com/zahereen/images/slide/Cnv0281_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Cnv0281_02_LRG.jpg",
																																												"http://www.click2egypt.com/zahereen/images/slide/Cnv0298_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Cnv0298_LRG.jpg",
																																														"http://www.click2egypt.com/zahereen/images/slide/Cnv0393_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Cnv0393_LRG.jpg",
																																																"http://www.click2egypt.com/zahereen/images/slide/Cnv0637_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Cnv0637_LRG.jpg",
																																																		"http://www.click2egypt.com/zahereen/images/slide/Cnv0679_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Cnv0679_LRG.jpg",
																																																				"http://www.click2egypt.com/zahereen/images/slide/Cnv0710_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Cnv0710_LRG.jpg",
																																																						"http://www.click2egypt.com/zahereen/images/slide/cobab_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/cobab_01_LRG.jpg",
																																																								"http://www.click2egypt.com/zahereen/images/slide/cylid-nksh_04_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/cylid-nksh_04_LRG.jpg",
																																																										"http://www.click2egypt.com/zahereen/images/slide/cylid-robos_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/cylid-robos_03_LRG.jpg",
																																																												"http://www.click2egypt.com/zahereen/images/slide/enaba_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/enaba_03_LRG.jpg",
																																																														"http://www.click2egypt.com/zahereen/images/slide/eye-lamp_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/eye-lamp_01_LRG.jpg",
																																																																"http://www.click2egypt.com/zahereen/images/slide/Farasha-Yello_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Farasha-Yello_03_LRG.jpg",
																																																																		"http://www.click2egypt.com/zahereen/images/slide/fns-nshr_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/fns-nshr_02_LRG.jpg",
																																																																				"http://www.click2egypt.com/zahereen/images/slide/globe-r_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/globe-r_02_LRG.jpg",
																																																																						"http://www.click2egypt.com/zahereen/images/slide/gonlla_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/gonlla_01_LRG.jpg",
																																																																								"http://www.click2egypt.com/zahereen/images/slide/han-palace_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/han-palace_03_LRG.jpg",
																																																																										"http://www.click2egypt.com/zahereen/images/slide/harba-mshrb_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/harba-mshrb_03_LRG.jpg",
																																																																												"http://www.click2egypt.com/zahereen/images/slide/harba-nksh-rev_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/harba-nksh-rev_03_LRG.jpg",
																																																																														"http://www.click2egypt.com/zahereen/images/slide/hrm_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/hrm_03_LRG.jpg",
																																																																																"http://www.click2egypt.com/zahereen/images/slide/kal3a_04_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/kal3a_04_LRG.jpg",
																																																																																		"http://www.click2egypt.com/zahereen/images/slide/kobba_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/kobba_02_LRG.jpg",
																																																																																				"http://www.click2egypt.com/zahereen/images/slide/kob-mbkh-chnd_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/kob-mbkh-chnd_01_LRG.jpg",
																																																																																						"http://www.click2egypt.com/zahereen/images/slide/kom3-122_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/kom3-122_01_LRG.jpg",
																																																																																								"http://www.click2egypt.com/zahereen/images/slide/koshtomor_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/koshtomor_02_LRG.jpg",
																																																																																										"http://www.click2egypt.com/zahereen/images/slide/L-chndlr_05_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/L-chndlr_05_LRG.jpg",
																																																																																												"http://www.click2egypt.com/zahereen/images/slide/LG-Mishkah-red_05_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/LG-Mishkah-red_05_LRG.jpg",
																																																																																														"http://www.click2egypt.com/zahereen/images/slide/libr-oil-lamp_07_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/libr-oil-lamp_07_LRG.jpg",
																																																																																																"http://www.click2egypt.com/zahereen/images/slide/lots-pndnts_05_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/lots-pndnts_05_LRG.jpg",
																																																																																																		"http://www.click2egypt.com/zahereen/images/slide/lotus-ver2_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/lotus-ver2_02_LRG.jpg",
																																																																																																				"http://www.click2egypt.com/zahereen/images/slide/masloob_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/masloob_02_LRG.jpg",
																																																																																																						"http://www.click2egypt.com/zahereen/images/slide/mdwr-rsh_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/mdwr-rsh_03_LRG.jpg",
																																																																																																								"http://www.click2egypt.com/zahereen/images/slide/memlook_09_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/memlook_09_LRG.jpg",
																																																																																																										"http://www.click2egypt.com/zahereen/images/slide/mishkah-shmi2_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/mishkah-shmi2_01_LRG.jpg",
																																																																																																												"http://www.click2egypt.com/zahereen/images/slide/mishk-pndnt_05_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/mishk-pndnt_05_LRG.jpg",
																																																																																																														"http://www.click2egypt.com/zahereen/images/slide/nafora_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/nafora_02_LRG.jpg",
																																																																																																																"http://www.click2egypt.com/zahereen/images/slide/Nagari-Yello_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Nagari-Yello_02_LRG.jpg",
																																																																																																																		"http://www.click2egypt.com/zahereen/images/slide/nag-k-sm_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/nag-k-sm_01_LRG.jpg",
																																																																																																																				"http://www.click2egypt.com/zahereen/images/slide/ng-mshk_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/ng-mshk_01_LRG.jpg",
																																																																																																																						"http://www.click2egypt.com/zahereen/images/slide/R-shade_04_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/R-shade_04_LRG.jpg",
																																																																																																																								"http://www.click2egypt.com/zahereen/images/slide/sakhra_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/sakhra_02_LRG.jpg",
																																																																																																																										"http://www.click2egypt.com/zahereen/images/slide/saneyya-b-y_08_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/saneyya-b-y_08_LRG.jpg",
																																																																																																																												"http://www.click2egypt.com/zahereen/images/slide/saneyya-gls-b_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/saneyya-gls-b_03_LRG.jpg",
																																																																																																																														"http://www.click2egypt.com/zahereen/images/slide/scon_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/scon_03_LRG.jpg",
																																																																																																																																"http://www.click2egypt.com/zahereen/images/slide/Sconce_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Sconce_02_LRG.jpg",
																																																																																																																																		"http://www.click2egypt.com/zahereen/images/slide/scon-shami_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/scon-shami_01_LRG.jpg",
																																																																																																																																				"http://www.click2egypt.com/zahereen/images/slide/scon-tabak_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/scon-tabak_01_LRG.jpg",
																																																																																																																																						"http://www.click2egypt.com/zahereen/images/slide/s-g-huge-chnd_06_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/s-g-huge-chnd_06_LRG.jpg",
																																																																																																																																								"http://www.click2egypt.com/zahereen/images/slide/shabak_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/shabak_01_LRG.jpg",
																																																																																																																																										"http://www.click2egypt.com/zahereen/images/slide/sun_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/sun_03_LRG.jpg",
																																																																																																																																												"http://www.click2egypt.com/zahereen/images/slide/tall-tkhreem-fns_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/tall-tkhreem-fns_02_LRG.jpg",
																																																																																																																																														"http://www.click2egypt.com/zahereen/images/slide/tbl-amb_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/tbl-amb_01_LRG.jpg",
																																																																																																																																																"http://www.click2egypt.com/zahereen/images/slide/tbl-lmp-3rs_04_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/tbl-lmp-3rs_04_LRG.jpg",
																																																																																																																																																		"http://www.click2egypt.com/zahereen/images/slide/tbl-sm_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/tbl-sm_01_LRG.jpg",
																																																																																																																																																				"http://www.click2egypt.com/zahereen/images/slide/teff_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/teff_02_LRG.jpg",
																																																																																																																																																						"http://www.click2egypt.com/zahereen/images/slide/Tfny-Pitcher_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Tfny-Pitcher_03_LRG.jpg",
																																																																																																																																																								"http://www.click2egypt.com/zahereen/images/slide/tri-fnyr_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/tri-fnyr_01_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/memlook_21_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/memlook_21_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/Cnv0710_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Cnv0710_03_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/memlook_sil_06_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/memlook_sil_06_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/lotus-ver2_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/lotus-ver2_03_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/kal3a_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/kal3a_03_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/Kandeel-chndlr_06_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/Kandeel-chndlr_06_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/disney_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/disney_01_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/lotus-cristal_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/lotus-cristal_03_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/cobab_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/cobab_02_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/bell-blue_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/bell-blue_03_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/basem_05_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/basem_05_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/ball-jew-chndlr_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/ball-jew-chndlr_02_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/ant-r-b_04_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/ant-r-b_04_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/an-nshr_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/an-nshr_02_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/an-star-wire_02_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/an-star-wire_02_LRG.jpg",
"http://www.click2egypt.com/zahereen/images/slide/ant-ball-qndl_01_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/ant-ball-qndl_01_LRG.jpg",																																																																																																																																																																																
		"http://www.click2egypt.com/zahereen/images/slide/XXL-helton_03_LRG.jpg","http://www.click2egypt.com/zahereen/images/slide/XXL-helton_03_LRG.jpg" // NOTE No comma after last line
		);

/***************** DO NOT EDIT BELOW **********************************/
	var B_LI,B_MI,B_RI,B_TI,B_Angle=0,B_CrImg=6,B_MaxW,B_Direction=1;
	var B_MSz,B_Stppd=false;B_Pre_Img=new Array(Book_Image_Sources.length);

	function ImageBook(){
		if(document.getElementById){
			for(i=0;i<Book_Image_Sources.length;i+=2){
				B_Pre_Img[i]=new Image();B_Pre_Img[i].src=Book_Image_Sources[i]}
			Book_Div=document.getElementById("Book");
			B_LI=document.createElement("img");Book_Div.appendChild(B_LI);	
			B_RI=document.createElement("img");Book_Div.appendChild(B_RI);
			B_MI=document.createElement("img");Book_Div.appendChild(B_MI);	
			B_LI.style.position=B_MI.style.position=B_RI.style.position="absolute";
			B_LI.style.zIndex=B_RI.style.zIndex=0;B_MI.style.zIndex=1;
			B_LI.style.top=(Book_Vertical_Turn?Book_Image_Height+1:0)+"px";
			B_LI.style.left=0+"px";
			B_MI.style.top=0+"px";
			B_MI.style.left=(Book_Vertical_Turn?0:Book_Image_Width+1)+"px";
			B_RI.style.top=0+"px";
			B_RI.style.left=(Book_Vertical_Turn?0:Book_Image_Width+1)+"px";
			B_LI.style.height=Book_Image_Height+"px";
			B_MI.style.height=Book_Image_Height+"px";
			B_RI.style.height=Book_Image_Height+"px";
			B_LI.style.width=Book_Image_Width+"px";
			B_MI.style.width=Book_Image_Width+"px";
			B_RI.style.width=Book_Image_Width+"px";
			if(Book_Border){
				B_LI.style.borderStyle=B_MI.style.borderStyle=B_RI.style.borderStyle="solid";
				B_LI.style.borderWidth=1+"px";
				B_MI.style.borderWidth=1+"px";
				B_RI.style.borderWidth=1+"px";
				B_LI.style.borderColor=B_MI.style.borderColor=B_RI.style.borderColor=Book_Border_Color}
			B_LI.src=B_Pre_Img[0].src;
			B_LI.lnk=Book_Image_Sources[1];
			B_MI.src=B_Pre_Img[2].src;
			B_MI.lnk=Book_Image_Sources[3];
			B_RI.src=B_Pre_Img[4].src;
			B_RI.lnk=Book_Image_Sources[5];
			B_LI.onclick=B_MI.onclick=B_RI.onclick=B_LdLnk;
			B_LI.onmouseover=B_MI.onmouseover=B_RI.onmouseover=B_Stp;
			B_LI.onmouseout=B_MI.onmouseout=B_RI.onmouseout=B_Rstrt;
			BookImages()}}

	function BookImages(){
		if(!B_Stppd){
			if(Book_Vertical_Turn){
				B_MSz=Math.abs(Math.round(Math.cos(B_Angle)*Book_Image_Height));
				MidOffset=!B_Direction?Book_Image_Height+1:Book_Image_Height-B_MSz;
				B_MI.style.top=MidOffset+"px";
				B_MI.style.height=B_MSz+"px"}
			else{	B_MSz=Math.abs(Math.round(Math.cos(B_Angle)*Book_Image_Width));
				MidOffset=B_Direction?Book_Image_Width+1:Book_Image_Width-B_MSz;
				B_MI.style.left=MidOffset+"px";
				B_MI.style.width=B_MSz+"px"}
			B_Angle+=Book_Speed/720*Math.PI;
			if(B_Angle>=Math.PI/2&&B_Direction){
				B_Direction=0;
				if(B_CrImg==Book_Image_Sources.length)B_CrImg=0;
				B_MI.src=B_Pre_Img[B_CrImg].src;
				B_MI.lnk=Book_Image_Sources[B_CrImg+1];
				B_CrImg+=2}
			if(B_Angle>=Math.PI){
				B_Direction=1;
				B_TI=B_LI;
				B_LI=B_MI;
				B_MI=B_TI;
				if(Book_Vertical_Turn)B_MI.style.top=0+"px";
				else B_MI.style.left=Book_Image_Width+1+"px";			
				B_MI.src=B_RI.src;
				B_MI.lnk=B_RI.lnk;

				setTimeout("Book_Next_Delay()",Book_NextPage_Delay)}
			else setTimeout("BookImages()",50)}
		else setTimeout("BookImages()",50)}

	function Book_Next_Delay(){
			if(B_CrImg==Book_Image_Sources.length)B_CrImg=0;
			B_RI.src=B_Pre_Img[B_CrImg].src;
			B_RI.lnk=Book_Image_Sources[B_CrImg+1];
			B_MI.style.zIndex=2;
			B_LI.style.zIndex=1;
			B_Angle=0;
			B_CrImg+=2;
		setTimeout("BookImages()",50)}

	function B_LdLnk(){if(this.lnk)window.location.href=this.lnk}
	function B_Stp(){B_Stppd=true;this.style.cursor=this.lnk?"pointer":"default"}
	function B_Rstrt(){B_Stppd=false}
</script>

	<div id="Book" align="center" style="position:relative">
		<img src="placeholder.gif" width="2*book image width+4" height="book image height+2" alt="Image Book" />
Image Book
	</div>

<body onload="ImageBook()" />

<table cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="462" height="255" id="AutoNumber1">
  <tr>
    <td width="100%"> </td>
  </tr>
</table>

<p </p> <p </p>
<p align="justify"><font size="2"><span >If there is anything we can do to make 
your visits more enjoyable don't hesitate to </span></font>
<span >
<a  href="http://click2egypt.com/zahereen/index.php?main_page=contact_us">
<font size="2">Contact Us</font></a><font size="2">. </font> </span>
<font size="2">So enjoy and thanks for stopping by.</font></p>

</body>

</html>