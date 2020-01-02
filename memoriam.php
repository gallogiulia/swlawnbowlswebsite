<!DOCTYPE HTML>
<html>
<head>

<?php include('0_sitewide_meta_tags.txt'); ?>

<title>Friends We Have Lost</title>

<link href="0_css_master.css" rel="stylesheet" type="text/css">
<link href="0_css_site_wide.css" rel="stylesheet" type="text/css">
<link href="memoriam.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script type="text/javascript" src="0_javascript/jquery.tablesorter.js"></script>
<script type="text/javascript">
	$(document).ready(function() 
 { 
  $("#departed").tablesorter(); 
 } 
 );  
</script>
<body>

<a name="top"></a>

<div class="container">

<?php include('0_banner.txt'); ?>

<?php include('0_menu_main_full.txt'); ?>

<div class="content">

<h1>Friends We Have Lost</h1>

<p>
Southwest<strong> <span class="text_men">men</span></strong> and  <strong class="text_women">women</strong> who have passed away are listed below. <br>
Details are available by clicking on the names (when available). If the date of passing is unsure, the month and/or date are shown with question marks.</p>

<p>
To include a member or provide additional information, <a href="mailto:webmaster@swlawnbowls.org?subject=Friends_We_Have_Lost" target="_blank">e-mail the webmaster</a>.
</p>

<p align="right"><a href="memoriam_print.php">(printer-friendly page)</a>
</p>

<div align="center" class="font_12"><em><span class="background_light_yellow">&nbsp;note: click on</span></em><span class="font_green_060 font_16 font_regular"> <em>Green </em></span><em><span class="background_light_yellow">column headings to re-sort the chart&nbsp;</span></em><br>&nbsp;
</div>


<?php include("memoriam.html"); ?>


<!-- content end --></div>

<?php require('include/php_footer.txt'); ?>

<!-- container end --></div>

</body>
</html>
