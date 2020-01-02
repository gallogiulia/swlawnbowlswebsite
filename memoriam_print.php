<!DOCTYPE HTML>
<html>
<head>

<?php include('0_sitewide_meta_tags.txt'); ?>

<title>Friends We Have Lost</title>


<!--
<link href="0_css_master.css" rel="stylesheet" type="text/css">
-->

<link href="0_css_site_wide.css" rel="stylesheet" type="text/css">
<link href="memoriam.css" rel="stylesheet" type="text/css">
<link href="memoriam_print.css" rel="stylesheet" type="text/css">

<style type="text/css">
body {
	background-color: #FFF;
}
</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script> 

<script type="text/javascript" src="0_javascript/jquery.tablesorter.js"></script>
<script type="text/javascript">
	$(document).ready(function() 
    { 
        $("#departed").tablesorter(); 
    } 
    );     
</script>


<a name="top"></a>

<div class="container_print">

<div class="content_print">

<h2>Southwest Division Members Who Have Passed Away</h2>

<p class="fltrt_10">as of 
<?php
// Prints the day, date, month, year, time, AM or PM
echo date("F j,  Y");
?>
</p>

<?php include("memoriam.html"); ?>


<!-- content_print end --></div>

<!-- container_print end --></div>

</body>
</html>
