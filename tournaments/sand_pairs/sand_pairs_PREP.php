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

<h3>San Diego Weekend<br>
 Wasserman Pairs</h3>

<div id="announce">


<h4>San Diego - 
Sunday, July 31, 2016</h4>


<?php 
if (file_exists('2016_flyer_sand_pairs.pdf')) 
{
echo '<div id="get_the_flyer"><a href="2016_flyer_sand_pairs.pdf">get the flyer for full tournament and entry details</a></div>';
}
?>


<img src="2016_flyer_sand_pairs.png" alt="Flyer" width="800" height="1035" usemap="#Map" />
<map name="Map">
 <area shape="rect" coords="330,937,597,968" href="http://www.sandiegolawnbowling.org/tournaments/wassermanpairssignup.html">
</map>


<!--
<p><span class="background_yellow">send corrections to</span>:<a href="mailto:howard@sandiegolawnbowling.com"> howard@sandiegolawnbowling.com</a></p>
-->


<!-- announce end --></div>

<a name="entries"></a>

<div id="entries_center">
<iframe width='620' height='440' frameborder='0' src='https://docs.google.com/spreadsheets/d/1pYt8kFA3CXuJAy1tpc-lGtARKRzk-RX1oFF8UxkOTx4/pubhtml'></iframe>
<!-- entries end --></div>

<a name="results"></a>

<h2>San Diego Mixed Pairs- RESULTS</h2>

<div>
<img src="2015_pic_winners.png" alt="" width="400" height="310" class="pic_pairs_winner"/>
</div>

<div class="results_pairs_one_class">
<div class="results_title"><span class="place">San Diego</span>2015 - Aug 2 <a href="2015_flyer_sand_pairs.pdf">(flyer)</a> <a href="https://docs.google.com/spreadsheets/d/1Ka9p-sryVp-LDHXAY4kc6Y0_d2KqUOI5pQH6o1gca6Q/edit?invite=CKX4854J&pli=1#gid=0">CHARTS</a></div>

<table width="100%">
<tr>
<th class="rank">1</th>
<td>Anne Nunes</td>
<td>Bill Brault</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Neil Furman</td>
<td>Heather Stewart</td>
</tr>
<tr>
<th class="rank">3</th>
<td>Dee McSparran</td>
<td>Bill Kagan</td>
</tr>
<tr>
<th class="rank">4</th>
<td>Leonard Wasserman</td>
<td>Lynda Borkum</td>
</tr>
<tr>
<th class="rank">5</th>
<td>Steve Smith</td>
<td>Maryna Hyland</td>
</tr>
</table>
</div>




<div class="results_pairs_one_class">
<div class="results_title"><span class="place">San Diego</span>2014 - Aug 3 <a href="2014_flyer_sand_pairs.pdf">(flyer)</a></div>

<table width="100%">
<tr>
<th class="rank">1</th>
<td>Kelly Warren</td>
<td>Candy  DeFazio</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Bill Brault</td>
<td>Anne  Nunes</td>
</tr>
<tr>
<th class="rank">3</th>
<td>Dave Wageman</td>
<td>Kathleen Wageman</td>
</tr>
<tr>
<th class="rank">4</th>
<td>Neil Furman</td>
<td>Heather  Stewart</td>
</tr>
<tr>
<th class="rank">5</th>
<td>Jim Olson</td>
<td>Robin  Olson</td>
</tr>
</table>
</div>




<div class="results_pairs_one_class">
<div class="results_title"><span class="place">San Diego</span>2013 - Aug 4 - <a href="https://docs.google.com/spreadsheet/ccc?key=0AobxY2wfPGq8dDQxNzg4RzRPTDZIOVRPeU8zbG5zbFE&usp=sharing#gid=0">CHARTS</a></div>

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
