<!DOCTYPE HTML>
<html>
<head>

<?php include('0_sitewide_meta_tags.txt'); ?>

<title>Umpires</title>


<!--
<link href="0_css_master.css" rel="stylesheet" type="text/css">
-->

<link href="0_css_site_wide.css" rel="stylesheet" type="text/css">
<link href="umpires.css" rel="stylesheet" type="text/css">
<link href="umpires_print.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #FFF;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script type="text/javascript" src="0_javascript/jquery.tablesorter.js"></script>
<script type="text/javascript">
	$(document).ready(function() 
    { 
        $("#umpire_box").tablesorter(); 
    } 
    );     
	</script>

<!--
<style type="text/css">
body {
	background-color: #FFF;
}
</style>
-->

<a name="top"></a>

<div class="container_print">

<div class="content_print">

<h3>Southwest Division Umpires - as of January 16, 2019</h3>

<?php include("umpires.txt"); ?>

<div class="explain">

<p>
<span class="text_women">*</span> = Head Division Umpire<br><span class="text_women">**</span> = National Umpire in Chief
</p>

</div>

<!-- content end --></div>

<!-- container end --></div>

</body>
</html>
