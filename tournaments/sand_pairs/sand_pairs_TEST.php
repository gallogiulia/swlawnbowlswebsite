<!DOCTYPE HTML>
<html>
<head>

<?php include('../../0_sitewide_meta_tags.txt'); ?>

<title>San Diego Pairs Tournament</title>

<link href="../../0_css_master.css" rel="stylesheet" type="text/css">
<link href="../../0_css_site_wide.css" rel="stylesheet" type="text/css">
<link href="../0_results.css" rel="stylesheet" type="text/css">
<link href="sand_pairs.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../scripts/scripts.js"></script>

</head>

<body>

<a name="top"></a>
<div class="container">

<?php include('../0_banner_results_other.txt'); ?>

<h3>San Diego Weekend - Mixed Pairs</h3>

<div id="announce">

<h4>San Diego - 
Sunday August 3, 2014</h4>


<?php 
if (file_exists('2014_flyer_sand_pairs.pdf')) 
{
echo '<div id="get_the_flyer"><a href="2014_flyer_sand_pairs.pdf" target="_blank">get the flyer for full tournament and entry details</a></div>';
}
?>

<img src="2014_flyer_sand_pairs.png" alt="San Diego Pairs" width="800" height="1030" border="0" usemap="#Map">
<map name="Map">
<area shape="rect" coords="68,621,654,673" href="http://sandiegolawnbowling.org/tournaments/augusttournaments2014.html" target="_blank" alt="San Diego Pairs">
</map>


<p><a href="http://sandiegolawnbowling.org/tournaments/augusttournaments2014.html" target="_blank">Sign Up On This Page</a></p>

<!-- announce end --></div>
<div id="entries_center">
<iframe width='600' height='800' frameborder='0' src='https://docs.google.com/spreadsheet/pub?key=0AobxY2wfPGq8dDlOZVdPSGxfWFJZQ0dLMFBvMnhic1E&chrome=false&gid=0'></iframe>
<!-- entries end --></div>

<a name="results"></a>

<h2>San Diego Mixed Pairs- RESULTS</h2>

<div class="results_pairs_one_class">
<div class="results_title"><span class="place">San Diego</span>2013 - Aug 4</div>

<table width="100%">
<tr>
<th class="rank">1</th>
<td>Howard Harris</td>
<td>Christine Ludwig</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Steve Smith</td>
<td>Dee McSparran</td>
</tr>
<tr>
<th class="rank">3</th>
<td>Roger Teske</td>
<td>Gerrie Guisbert</td>
</tr>
<tr>
<th class="rank">4</th>
<td>Jim Olson</td>
<td>Robin Olson</td>
</tr>
</table>
</div>



<?php require('../../include/php_footer.txt'); ?>

<!-- container end --></div>

</body>
</html>
