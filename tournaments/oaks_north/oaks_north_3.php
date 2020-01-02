<!DOCTYPE HTML>
<html>
<head>

<?php include('../../0_sitewide_meta_tags.txt'); ?>

<title>Oaks North Mixed Triples Tournament</title>

<link href="../../0_css_master.css" rel="stylesheet" type="text/css">
<link href="../../0_css_site_wide.css" rel="stylesheet" type="text/css">
<link href="../0_results.css" rel="stylesheet" type="text/css">
<link href="oaks_north_3.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../scripts/scripts.js"></script>

</head>

<body>

<a name="top"></a>

<div class="container">

<?php include("../0_banner_results_other.txt"); ?>

<h3>Oaks North Mixed Triples</h3>

<div id="announce">



<h4>Oaks North - Saturday, October 5, 2019


<!--
<br>
<a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vTGqGQur7OGXt7TLXZGKkKx2edOgrB1f46_R_wdJs_7J2nU9UBekGHyaznLu6C_0Z09vbxoBktpBNfo/pubhtml?gid=0&single=true">2019 CHART</a>
-->

</h4>



<div align="center">
<?php 
if (file_exists('2020_flyer_oaks_north_3_TEST.pdf')) 
{
echo '<div id="get_the_flyer"><a href="2020_flyer_oaks_north_3_TEST.pdf">get the flyer for full tournament and entry details</a></div>';
}
?>


<!--
<img src="2020_flyer_oaks_north_3.png" alt="" width="800" height="894" />
-->



</div>


<!--
<div class="payment">

<h6>PayPal Entry

</h6>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="Player's names">Player's names</td></tr><tr><td><input type="text" name="os0" maxlength="200"></td></tr>
</table>
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
-->


<!-- announce end --></div>

<a name="entries"></a>

<div id="entries_6_wide">
<iframe width='815' height='460' frameborder='0' src='https://docs.google.com/spreadsheet/pub?key=0Aloq6hwfreAWdE1EUTRETDhQemxnZi1MZFRwTDZvZUE&output=html&widget=true'></iframe>
<!-- entries end --></div>

<a name="results"></a>

<h2>Oaks North Mixed Triples - RESULTS</h2>



<table class="res2" width="780">
<tbody>
<tr>
<th colspan="3">A Group</th>
<th>&nbsp;</th>
<th colspan="3">B Group</th>
</tr>
<tr>
<td dir="ltr">Anne Nunes</td>
<td dir="ltr">Bill Brault</td>
<td dir="ltr">Heather Stewart</td>
<th>2019</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Roger Teske</td>
<td>Robert Busciglio</td>
<td>Candy DeFazio</td>
<th>2018</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Michael Siddall</td>
<td>Anne Nunes</td>
<td>Bill Brault</td>
<th>2017</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Len Wasserman</td>
<td>Phil Salt</td>
<td>Lynda Borkum</td>
<th class="rank">2016</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Ian Ho</td>
<td>Kottia Spangler</td>
<td>Eva Lee</td>
<th class="rank">2015</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Tony Baer</td>
<td>Roger Teske</td>
<td>Kim Heiser</td>
<th class="rank">2014</th>
<td>Keno Shaw</td>
<td>Bob Birkinshaw</td>
<td>Alice Birkinshaw</td>
</tr>
<tr>
<td>Scott Roberts</td>
<td>Linda Roberts</td>
<td>Ed Quo</td>
<th class="rank">2013</th>
<td>Boyce Stringer</td>
<td>Robert McMahon</td>
<td>Gerrie Giseburt</td>
</tr>
</tbody>
</table>



<img src="2019_pic_winners.png" alt="" width="300" height="220" class="fltrt_60"/>


<div class="results_trips_one_class">
<div class="results_title">
<div class="place">Oaks North</div>
2019 - OCT 5 <a href="2019_flyer_oaks_north_3.pdf">(flyer)</a> <a href="2019_pic_chart.png">CHART</a>
<!--
<a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vTGqGQur7OGXt7TLXZGKkKx2edOgrB1f46_R_wdJs_7J2nU9UBekGHyaznLu6C_0Z09vbxoBktpBNfo/pubhtml?gid=0&single=true">CHART</a>
-->



</div>
<table width="100%">
<tr>
<td></td>
<td colspan="3"><h4>(14 teams)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td dir="ltr">Anne Nunes</td>
<td dir="ltr">Bill Brault</td>
<td dir="ltr">Heather Stewart</td>
</tr>
<tr>
<th class="rank">2</th>
<td dir="ltr">Lou Cohen</td>
<td dir="ltr">Mike Ruggles</td>
<td dir="ltr">Shelley Cohen</td>
</tr>
<tr>
<th class="rank">3</th>
<td dir="ltr">Howard Harris</td>
<td dir="ltr">Christine Ludwig</td>
<td dir="ltr">Leonard Wasserman</td>
</tr>
<tr>
<th class="rank">4</th>
<td dir="ltr">Roger Teske</td>
<td dir="ltr">Robert Buscilio</td>
<td dir="ltr">Candy Defazio</td>
</tr>
</table>
</div>


<!--
<img src="2018_pic_winners_02.png" width="820" height="220" alt="" class="indent_80"/>
-->

<div class="spacer_10"></div>



<!--
<img src="2018_pic_winners.png" alt="" width="300" height="220" class="fltrt_60"/>
-->

<div class="results_trips_one_class">
<div class="results_title">
<div class="place">Oaks North</div>
2018 - OCT 6 <a href="2018_flyer_oaks_north_3.pdf">(flyer)</a> <a href="2018_pic_chart.jpg">CHART</a></div>
<table width="100%">
<tr>
<td></td>
<td colspan="3"><h4>(16 teams)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td class="res1">Roger Teske</td>
<td class="res1">Robert Busciglio</td>
<td class="res1">Candy DeFazio</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Charlie Herbert</td>
<td>Georgie Deno</td>
<td>Bill Buchanan</td>
</tr>
<tr>
<th class="rank">3</th>
<td>James FLower</td>
<td>Corey Vose</td>
<td>Noreen Wilkie</td>
</tr>
<tr>
<th class="rank">4</th>
<td>Tony Santos</td>
<td>Nancy Santos</td>
<td>Javier Gomez</td>
</tr>
</table>
</div>


<!--
<img src="2018_pic_winners_02.png" width="820" height="220" alt="" class="indent_80"/>
-->

<div class="spacer_10"></div>



<img src="2017_pic_winners.png" alt="" width="300" height="220" class="fltrt_60"/>


<div class="results_trips_one_class">
<div class="results_title">
<div class="place">Oaks North</div>
2017 - OCT 14 <a href="2017_flyer_oaks_north_3.pdf">(flyer)</a> <a href="2017_pic_chart.jpg">CHART</a></div>
<table width="100%">
<tr>
<td></td>
<td colspan="3"><h4>(16 teams)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Michael Siddall</td>
<td>Anne Nunes</td>
<td>Bill Brault</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Scott Roberts</td>
<td>Ed Quo</td>
<td>Linda Roberts</td>
</tr>
<tr>
<th class="rank">3</th>
<td>Roger Teske</td>
<td>Aaron Zangl</td>
<td>Carol Poto</td>
</tr>
<tr>
<th class="rank">4</th>
<td>Peter Ritchie</td>
<td>Georgie Deno</td>
<td>Adriana Sandoval</td>
</tr>
</table>
</div>


<img src="2017_pic_winners_02.png" width="820" height="220" alt="" class="indent_80"/>


<div class="spacer_10"></div>




<img src="2016_pic_winners.png" alt="" width="300" height="249" class="fltrt_60"/>


<div class="results_trips_one_class">
 <div class="results_title">
<div class="place">Oaks North</div>
2016 - OCT 16 <a href="2016_flyer_oaks_north_3.pdf">(flyer)</a> </div>
<table width="100%">
<tr>
<td></td>
<td colspan="3"><h4>(12 teams)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Len Wasserman</td>
<td>Phil Salt</td>
<td>Lynda Borkum</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Scott Roberts</td>
<td>Ed Quo</td>
<td>Linda Roberts</td>
</tr>
<tr>
<th class="rank">3</th>
<td>Charlie Herbert</td>
<td>Melanie Vizenor</td>
<td>Tod Friedman</td>
</tr>
</table>
</div>


<div class="spacer_1"></div>


<div class="results_trips_one_class">
 <div class="results_title">
<div class="place">Oaks North</div>
2015 - OCT 18 <a href="2015_flyer_oaks_north_3.pdf">(flyer)</a> </div>
<table width="100%">
<tr>
<td></td>
<td colspan="3"><h4>(12 teams)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Ian Ho</td>
<td>Kottia Spangler</td>
<td>Eva Lee</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Leonard Wasserman</td>
<td>Chuck Cooper</td>
<td>Lynda Borkum</td>
</tr>
<tr>
<th class="rank">3</th>
<td>Scott Roberts</td>
<td>Ed Quo</td>
<td>Linda Roberts</td>
</tr>
</table>
</div>


<div class="results_trips_two_classes">
<div class="results_title">
<div class="place">Oaks North</div> 
2014 - Nov 9 <a href="2014_flyer_oaks_north_3.pdf">(flyer)</a></div>
<table width="100%">
<tr>
<td>&nbsp;</td>
<td colspan="3"><h4>A Group</h4></td>
<td>&nbsp;</td>
<td colspan="3"><h4>B Group</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Tony Baer</td>
<td>Roger Teske</td>
<td>Kim Heiser</td>
<th class="rank">1</th>
<td>Keno Shaw</td>
<td>Bob Birkinshaw</td>
<td>Alice Birkinshaw</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Scott Roberts</td>
<td>Ed Quo</td>
<td>Linda Roberts</td>
<th class="rank">2</th>
<td>Boyce Stringer</td>
<td>Gregg Gattuso</td>
<td>Nancy Stringer</td>
</tr>
<tr>
<th class="rank">3</th>
<td>James Flowers</td>
<td>Noreen Wilke</td>
<td>Betsy Lauryssen</td>
<th class="rank">3</th>
<td>Reggie Rook</td>
<td>Greg Golgart</td>
<td>Stephanie Johnson</td>
</tr>
<tr>
<th class="rank">&nbsp;</th>
<td colspan="3"><img name="q" src="2014_pic_winners_a.png" width="360" height="240" alt=""><br>
<em>Kim Heiser - Tony Baer - Roger Teske</em></td>
<th class="rank">&nbsp;</th>
<td colspan="3"><img name="q" src="2014_pic_winners_b.png" width="360" height="240" alt=""><br>
<em>Bob Birkinshaw - Alice Birkinshaw - Keno Shaw</em></td>
</tr>
</table>
</div>



<div class="results_trips_two_classes">
<div class="results_title">
<div class="place">Oaks North</div> 
2013 - Nov 10 <a href="2013_flyer_oaks_north_3.pdf">(flyer)</a></div>
<table width="100%">
<tr>
<td>&nbsp;</td>
<td colspan="3"><h4>A Group</h4></td>
<td>&nbsp;</td>
<td colspan="3"><h4>B Group</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Scott Roberts</td>
<td>Linda Roberts</td>
<td>Ed Quo</td>
<th class="rank">1</th>
<td>Boyce Stringer</td>
<td>Robert McMahon</td>
<td>Gerrie Giseburt</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Gregg Gattuso</td>
<td>Richard Reid</td>
<td>Sharon Tooley</td>
<th class="rank">2</th>
<td>Herb Glazeroff</td>
<td>Stephanie Johnson</td>
<td>Grant Shear</td>
</tr>
</table>
</div>

<br>
<br>
<br>
<br>
<br>
<br>


<?php require('../../include/php_footer.txt'); ?>

<!-- container end --></div>

</body>
</html>
