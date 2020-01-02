<!DOCTYPE HTML>
<html>
<head>

<?php include('0_sitewide_meta_tags.txt'); ?>

<title>Coaches</title>


<!--
<link href="0_css_master.css" rel="stylesheet" type="text/css">

-->

<link href="0_css_site_wide.css" rel="stylesheet" type="text/css">


<link href="coach.css" rel="stylesheet" type="text/css">


<link href="coach_print.css" rel="stylesheet" type="text/css">


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script type="text/javascript" src="0_javascript/jquery.tablesorter.js"></script>
<script type="text/javascript">
	$(document).ready(function() 
    { 
        $("#coach_box").tablesorter(); 
    } 
    );     
	</script>
<style type="text/css">
body {
    background-image: url(coach/bg.jpg);
    background-color: #FFF;
    background-repeat: repeat;
}
</style>
<body>

<a name="top"></a>

<div class="container_print">

<div class="content_print">

<h3>Southwest Division Coaches</h3>

<?php include("coach.txt"); ?>

<div class="explain">
</div>

<!-- content end --></div>

<!-- container end --></div>

</body>
</html>
