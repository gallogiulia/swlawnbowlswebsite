<!DOCTYPE HTML>
<html>
<head>

<?php include('0_sitewide_meta_tags.txt'); ?>

<title>Coaches and Coaching</title>

<link href="0_css_master.css" rel="stylesheet" type="text/css">
<link href="0_css_site_wide.css" rel="stylesheet" type="text/css">
<link href="coach.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script type="text/javascript" src="0_javascript/jquery.tablesorter.js"></script>
<script type="text/javascript">
	$(document).ready(function() 
    { 
        $("#coach_box").tablesorter(); 
    } 
    );     
	</script>
<body>

<a name="top"></a>

<div class="container">

<?php include('0_banner.txt'); ?>

<?php include('0_menu_main_full.txt'); ?>

<div class="content">

<h1>COACHES AND COACHING</h1>



<p>Visit <a href="http://www.bowlsusa.us/coaching-clinics.html">this Bowls USA</a> page for information about the Coaching program.</p>



<p>A <strong>Certified Club Coach Course</strong> was presented September 13-14, 2019 at Laguna Beach.</p>


<h2>Division Coaches</h2>
<p>The  <span class="text_men">men</span> and <span class="text_red">women</span> Southwest division coaches and club affiliations are shown below. If your name should be on the list but isn't, <a href="mailto:webmaster@swlawnbowls.org?subject=Coach Page" target="_blank">let us know</a>.</p>
<p align="right"><a href="coach_print.php">(printable page with just names and clubs)</a></p>

<div align="center" class="font_12"><em><span class="background_light_yellow">&nbsp;note: click on</span></em><span class="font_green_060 font_16 font_regular"> <em>Green </em></span><em><span class="background_light_yellow">column headings to re-sort the chart&nbsp;</span></em>

<?php include("coach.txt"); ?>


</div>

<!--
<?php include("coach.txt"); ?>
-->


<div class="clearfloat"></div>



<!-- content end --></div>

<?php require('include/php_footer.txt'); ?>

<!-- container end --></div>

</body>
</html>
