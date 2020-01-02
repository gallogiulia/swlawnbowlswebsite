<!DOCTYPE HTML>
<html>
<head>

<?php include('0_sitewide_meta_tags.txt'); ?>

<title>markermarkers</title>

<link href="0_css_master.css" rel="stylesheet" type="text/css">
<link href="0_css_site_wide.css" rel="stylesheet" type="text/css">
<link href="markers.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script type="text/javascript" src="0_javascript/jquery.tablesorter.js"></script>
<script type="text/javascript">
	$(document).ready(function() 
 { 
  $("#marker_box").tablesorter(); 
 } 
 );  
</script>
<body>

<a name="top"></a>

<div class="container">

<?php include('0_banner.txt'); ?>

<?php include('0_menu_main_full.txt'); ?>

<div class="content">

<div class="photos"><img src="markers/marker_shirt.png" width="150" height="259" alt="SWD Head markermarker">

</div>

<h1>MARKERS</h1>

<h2>Southwest Division <span class="text_men">Men</span> &amp; <span class="text_red">Women</span> Certified Markers</h2>

<p>The <span class="text_men">men</span> and <span class="text_red">women</span> division Markers and club affiliations listed below were certified under the lead of our National Umpire in Chief,  Melanie Vizenor. If your name should be on the list but isn't, <a href="mailto:webmaster@swlawnbowls.org?subject=Marker Page" target="_blank">let us know</a>.</p>
<p>Markers received classroon and practical training to earn the title. In recognition of their willingness to participate, Markers were awarded shirts with a distinctive logo to be worn while performing their duties (see shirt and logo at right).</p>

<p align="right"><a href="markers_print.php">(printable page with just names and clubs)</a></p>

<div align="center" class="font_12"><em><span class="background_light_yellow">&nbsp;note: click on</span></em><span class="font_green_060 font_16 font_regular"> <em>Green </em></span><em><span class="background_light_yellow">column headings to re-sort the chart&nbsp;</span></em></div>


<?php include("markers.txt"); ?>


<div class="explain">
<p>&nbsp;</p>
</div>

<?php require('include/php_footer.txt'); ?>

<!-- content end --></div>

<!-- container end --></div>

</body>
</html>
