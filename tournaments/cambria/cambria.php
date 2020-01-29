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
<h3>Cambria Open Singles</h3>

<div id="announce">



<h4>Cambria - Saturday/Sunday, March 28-29, 2020</h4>
    <div align="center">
        <?php
        if (file_exists('CambriaSingles_v0.6_GG.pdf'))
        {
            echo '<div id="get_the_flyer"><a href="CambriaSingles_v0.6_GG.pdf"> get the flyer for full tournament and entry details </a></div>';
        }
        ?>

</div>



<img src="CambriaSingles_v0.6_GG.png" alt="Flyer" width="800" height="1100" >



<div class="payment">

<h6>
Enter your information below
</h6>


<form action="https://paypal.me/CambriaLBC" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="A8TXWUL68SNCN">
<table>
<tr><td><input type="hidden" name="on0" value="Player Name">Player Name</td></tr><tr><td><input type="text" name="os0" maxlength="200"></td></tr>
<tr><td><input type="hidden" name="on1" value="email-address">Email-Address</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
<tr><td><input type="hidden" name="on1" value="club-affiliation">Club affiliation</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>

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
