<!DOCTYPE HTML>
<html>
<head>

<?php include('../../0_sitewide_meta_tags.txt'); ?>

<title>Cambria Open Singles Tournament</title>

<link href="../../0_css_master.css" rel="stylesheet" type="text/css">
<link href="../../0_css_site_wide.css" rel="stylesheet" type="text/css">
<link href="../0_results.css" rel="stylesheet" type="text/css">
<link href="cambria.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../scripts/scripts.js"></script>

</head>

<body>

<a name="top"></a>

<div class="container">

<?php include("../0_banner_results_other.txt"); ?>
<h3>Cambria Open Singles <a href="#about"><span class="about_link">(about)</span></a></h3>

<div id="announce">



<h4>Cambria - Saturday/Sunday, March 28-29, 2020</h4>
    <div align="center">
        <?php
        if (file_exists('CambriaSingles_v2.1_GG.pdf'))
        {
            echo '<div id="get_the_flyer"><a href="CambriaSingles_v2.1_GG.pdf"> get the flyer for full tournament and entry details </a></div>';
        }
        ?>

</div>



<img src="CambriaSingles_v2.2_GG.png" alt="Flyer" width="800" height="1150" >


<!-- announce end --></div>


<a name="entries"></a>

<div id="entries_6_wide">
<iframe width='900' height='680' frameborder='0' src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRl-P0rSyeO9HhC-37pQb7hgzyXlWa6f1yFcG-pkEPDXC9WrWjAbBCNHHKdKbFf9MD26AjMFyDZ7f64/pubhtml?gid=575073317&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
<!-- entries end --></div>



<!--
<div id="about_box">
<a name="about_info"></a>

<h5>
<div class="back_to_top"><a href="#top">&nbsp;Back to Top</a></div>
About the Tournament...</h5>
<p>text goes here</p>
</div>
-->


<?php require('../../include/php_footer.txt'); ?>

<!-- container end --></div>

</body>
</html>
