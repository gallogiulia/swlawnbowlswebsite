<!DOCTYPE HTML>
<html>
<head>

<?php include('../0_sitewide_meta_tags.txt'); ?>

<title>----- Tournament</title>

<link href="../0_css_master.css" rel="stylesheet" type="text/css">
<link href="../0_css_site_wide.css" rel="stylesheet" type="text/css">
<link href="0_results.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../scripts/scripts.js"></script>



</head>

<body>

<a name="top"></a>

<div class="container">

<?php include("0_banner_results_other.txt"); ?>

<?php include("0_banner_results_swwd.txt"); ?>

<?php include("0_banner_results_swlba.txt"); ?>

<h3>Tournament Name Here</h3>

<?php require('_points_event_men.txt'); ?>

<?php require('_points_event_women.txt'); ?>

<div id="announce">

<h4>(h4 format) Club Name - 
Day of Week, Month DD, YYYY</h4>


<?php 
if (file_exists('about.php')) 
{
echo '<div id="about">
<form>
<input type="button" value="About" onclick="open_about()">
</form>
</div>
';
}
?>


<!--
<div id="about"><a href="#about_info">About</a></div>
-->


<div id="get_the_flyer">get the flyer for full tournament and entry details</div>



<table width="49%" border="0" cellpadding="0" cellspacing="0" class="fltrt">
<tr>
<th>Entry Deadline:</th>
<td>November 23</td>
</tr>
<tr>
<th>Check-In:</th>
<td>8:30 AM</td>
</tr>
<tr>
<th>Anouncements:</th>
<td>8:45 AM</td>
</tr>
<tr>
<th>Start:</th>
<td>9:00 AM</td>
</tr>
<tr>
<th>Lunch:</th>
<td>Bring your own - salads provided</td>
</tr>
<tr>
<th>Prizes:</th>
<td>Cash awards for </td>
</tr>
<tr>
<th colspan="2"><div id="pay_pal">Content for  id "pay_pal" Goes Here</div></th>
</tr>
</table>




<table width="49%" border="0" cellpadding="0" cellspacing="0">
<tr>
<th>Format:</th>
<td>Singles (Pairs) (Triples) (Fours)</td>
</tr>
<tr>
<th>Players:</th>
<td>Matched (Men only)<br></td>
</tr>
<tr>
<th>Games:</th>
<td>Three 12-end</td>
</tr>
<tr>
<th>Classes:</th>
<td>A and B Flights</td>
</tr>
<tr>
<th>Scoring:</th>
<td>Traditional/Quinnell - max. of 10 plus points</td>
</tr>
<tr>
<th>Fee:</th>
<td>$60/team</td>
</tr>
<tr>
<th>Payment:</th>
<td>by check to:<br></td>
</tr>
<tr>
<th></th>
<td class="mail_to">name<br>
# Street<br>
City, State ZIP</td>
</tr>
</table>


<!-- announce end --></div>

<div id="entries_6_wide">
<iframe width='570' height='400' frameborder='0' src='https://docs.google.com/spreadsheet/pub?key=0Aloq6hwfreAWdEN1SzF6RTU3X0hCYmdkd08wNUk3Vmc&output=html&widget=true'></iframe>
<!-- entries end --></div>

<a name="results"></a>

<h2>- RESULTS</h2>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="results_pairs_one_class">
<div class="results_title"><span class="place">Loc</span>2012 - Mon dd (flyer)</div>
<table width="100%">
<tr>
<td class="rank">&nbsp;</td>
<td colspan="2"><h4>A Green (?? teams)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
<tr>
<th class="rank">2</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
<tr>
<th class="rank">3</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
<tr>
<th class="rank">4</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
</table>
</div>
<p>&nbsp;</p>
<p>Pairs - Two classes</p>


<div class="results_pairs_two_classes">
<div class="results_title"><span class="place">Loc</span>2012 - Mon dd (flyer)</div>
<table width="100%">
<tr>
<td class="rank">&nbsp;</td>
<td colspan="2"><h4>A Green (?? teams)</h4></td>
<td>&nbsp;</td>
<td colspan="2"><h4>B Green (?? teams)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">1</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
<tr>
<th class="rank">2</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">2</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
<tr>
<th class="rank">3</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">3</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
<tr>
<th class="rank">4</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">4</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
</table>
</div>

<p>Pairs - three classes </p>
<div class="results_pairs_three_classes">
<div class="results_title"><span class="place">Loc</span>2012 - Mon dd (flyer)</div>
<table width="100%">
<tr>
<td class="rank">&nbsp;</td>
<td colspan="2"><h4>A Green (?? teams)</h4></td>
<td>&nbsp;</td>
<td colspan="2"><h4>B Green (?? teams)</h4></td>
<td>&nbsp;</td>
<td colspan="2"><h4>C Green</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">1</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">1</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
<tr>
<th class="rank">2</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">2</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">2</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
<tr>
<th class="rank">3</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">3</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">3</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
<tr>
<th class="rank">4</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">4</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
<th class="rank">4</th>
<td class="results">&nbsp;</td>
<td class="results">&nbsp;</td>
</tr>
</table>
</div>





<p>&nbsp;</p>


<p>Triples - one class</p>
<div class="results_trips_one_class">
<div class="results_title">
<div class="place">somewhere</div> 
YYYY - Mmm dd
</div>
<table width="100%">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td class="rank">1</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td class="rank">2</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td class="rank">3</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td class="rank">4</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</div>



<p>Triples - two classes</p>




<div class="results_trips_two_classes">
<div class="results_title">
<div class="place">somewhere</div> 
YYYY - Mmm dd
</div>
<table width="100%">
<tr>
<td>&nbsp;</td>
<td colspan="3"><h4>A Green</h4></td>
<td>&nbsp;</td>
<td colspan="3"><h4>B Green</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<th class="rank">1</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">2</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<th class="rank">2</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">3</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<th class="rank">3</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">4</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<th class="rank">4</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</div>




<p>Triples - three classes <br>




</p>
<div class="results_trips_two_classes">
<div class="results_title">
<div class="place">somewhere</div>
YYYY - Mmm dd </div>
<table width="100%">
<tr>
<td>&nbsp;</td>
<td colspan="3"><h4>A Green</h4></td>
<td>&nbsp;</td>
<td colspan="3"><h4>B Green</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<th class="rank">1</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">2</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<th class="rank">2</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">3</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<th class="rank">3</th>
<td colspan="3"><h5>C Green</h5></td>
</tr>
<tr>
<th class="rank">4</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<th class="rank">4</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</div>


<p>&nbsp;</p>


<div class="results_pairs_two_classes">
<div class="results_title"><span class="floatRight">Location</span>YYYY - Mmm DD</div>

<table width="49%">
<tr>
<td>&nbsp;</td>
<td colspan="2">
<h4>B GREEN</h4>
</td>
</tr>
<tr>
<th>1</th>
<td class="results">Gregg Gattuso <BR></td>
<td class="results">Richard Reid</td>
</tr>
<tr>
<th>2</th>
<td class="results">Fred Robles</td>
<td class="results">Sean McMorris</td>
</tr>
<tr>
<th>(tie) 3</th>
<td class="results">Fred Robles</td>
<td class="results">Sean McMorris</td>
</tr>
<tr>
<th>(tie) 3</th>
<td class="results">Reggie Rook</td>
<td class="results">Greg Torres</td>
</tr>
</table>


<table width="49%" class="results_two">
<tr>
<td>&nbsp;</td>
<td colspan="2">
<h4>A GREEN</h4>
</td>
</tr>
<tr>
<th>1</th>
<td class="results">Gregg Gattuso <BR></td>
<td class="results">Richard Reid</td>
</tr>
<tr>
<th>2</th>
<td class="results">Fred Robles</td>
<td class="results">Sean McMorris</td>
</tr>
<tr>
<th>3</th>
<td class="results">Fred Robles</td>
<td class="results">Sean McMorris</td>
</tr>
<tr>
<th>4</th>
<td class="results">Reggie Rook</td>
<td class="results">Greg Torres</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

<table width = "325" class="results">
<tr>
<td colspan="2" class="heading"><div class="place">Location</div>
YYYY - MMM 00</td>
</tr>
<tr>
<td colspan="2"><h4>A Green (td H4)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Carol Poto<BR></td>
</tr>
<tr>
<th class="rank">2</th>
<td>Stephanie Johnsonberg</td>
</tr>
<tr>
<th class="rank">(tie) 3</th>
<td>Laurie Richards</td>
</tr>
<tr>
<th class="rank">(tie) 3</th>
<td>Stephanie Johnsonberg</td>
</tr>
</table>


<table width = "540" class="results">
<tr>
<td colspan="3" class="heading"><div class="place">Location</div>
YYYY - MMM 00</td>
</tr>
<tr>
<td><h4>&nbsp;</h4></td>
<th><h4>A Green (td H4)</h4></th>
<th><h4>B Green (td H4)</h4></th>
</tr>
<tr>
<th class="rank">1</th>
<td>Carol Poto<BR></td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Stephanie Johnsonberg</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">(tie) 3</th>
<td>Laurie Richards</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">(tie) 3</th>
<td>Stephanie Johnsonberg</td>
<td>&nbsp;</td>
</tr>
</table>



<table class="results" width="400">
<tr>
<td colspan="3" class="heading"><div class="place">Location</div>
YYYY - MMM 00</td>
</tr>
<tr>
<td colspan="3" ><h4>A Green (td H4)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Gregg Gattuso <BR></td>
<td>Richard Reid</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Fred Robles</td>
<td>Sean McMorris</td>
</tr>
<tr>
<th class="rank">(tie) 3</th>
<td>Fred Robles</td>
<td>Sean McMorris</td>
</tr>
<tr>
<th class="rank">(tie) 4</th>
<td>Reggie Rook</td>
<td>Greg Torres</td>
</tr>
<tr>
<th class="rank">&nbsp;</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="3" ><h4>B Green (td H4)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Gregg Gattuso <BR></td>
<td>Richard Reid</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Fred Robles</td>
<td>Sean McMorris</td>
</tr>
<tr>
<th class="rank">3</th>
<td>Barry Hayes</td>
<td>Ka-Yiu yu</td>
</tr>
<tr>
<th class="rank">4</th>
<td>Reggie Rook</td>
<td>Greg Torres</td>
</tr>
</table>



<table class="results" width="680">
<tr>
<td colspan="6" class="heading"><div class="place">Location</div>
YYYY - MMM 00</td>
</tr>
<tr>
<td ><h4>&nbsp;</h4></td>
<td colspan="2" ><h4>A Green (td H4)</h4></td>
<th >&nbsp;</th>
<td colspan="2" ><h4>B Green (td H4)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Gregg Gattuso <BR></td>
<td>Richard Reid</td>
<th class="rank">1</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Fred Robles</td>
<td>Sean McMorris</td>
<th class="rank">2</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">(tie) 3</th>
<td>Fred Robles</td>
<td>Sean McMorris</td>
<th class="rank">3</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th class="rank">(tie) 4</th>
<td>Reggie Rook</td>
<td>Greg Torres</td>
<th class="rank">4</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table class="results" width="550">
<tr>
<td colspan="4" class="heading"><div class="place">Location</div>
YYYY - MMM 00</td>
</tr>
<tr>
<th colspan="4"><h4>A Green (td H4)</h4></th>
</tr>
<tr>
<th class="rank">1</th>
<td>Howard Harris</td>
<td>Christine Ludwig</td>
<td>Lynda Borkum</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Conrad Melton</td>
<td>Jim Semanek</td>
<td>Gail Hodgson</td>
</tr>
<tr>
<th class="rank">(tie) 3</th>
<td>Brenda Wright</td>
<td>Dan Johnson</td>
<td>Jim Wyatt</td>
</tr>
<tr>
<th class="rank">(tie) 3</th>
<td>Tanya Hills</td>
<td>Rose Blennov</td>
<td>Stephanie Johnson</td>
</tr>
<tr>
<th colspan="4"><h4>A Green (td H4)</h4></th>
</tr>
<tr>
<th class="rank">1</th>
<td>Carol Robbins</td>
<td>Jo Ann LaFrenais</td>
<td>Ann Cantu</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Evelyn Tiel</td>
<td>Verna Wallace</td>
<td>Linda Blanche</td>
</tr>
<tr>
<th class="rank">3</th>
<td>Gary Clark</td>
<td>Barbara Clark</td>
<td>Morris Lane</td>
</tr>
</table>





<p>&nbsp;</p>
<p>fours</p>



<div class="results_fours_one_class">
<div class="results_title"><span class="floatRight">Location</span>YYYY - Mmm DD</div>
<table width="725">
<tr>
<td colspan="5" class="rank"><h4>A Green (td H4)</h4></td>
</tr>
<tr>
<th class="rank">1</th>
<td>Cecile Langevin</td>
<td> Gisela Schmid</td>
<td>Eileen Lancendorfer</td>
<td>Candy DeFazio</td>
</tr>
<tr>
<th class="rank">2</th>
<td>Tanya Hills</td>
<td>Rose Blennov</td>
<td>Stephanie Johnson</td>
<td>Carol Poto</td>
</tr>
<tr>
<th class="rank">3</th>
<td>Maryna Hyland</td>
<td>Heather Stewart</td>
<td>Eva Lee</td>
<td>Myrna Chan</td>
</tr>
<tr>
<th class="rank">4 (tie)</th>
<td> Gail Hodgson</td>
<td>Jo Mumma</td>
<td>Jo Ann LaFrenais</td>
<td> Linda Roberts</td>
</tr>
<tr>
<th class="rank">4 (tie)</th>
<td> Kottia Spangler</td>
<td> Anne Nunes</td>
<td>Cathy Herbert</td>
<td>Rosa Baer</td>
</tr>
</table>
<!-- fours_one_class end --></div>


<div id="about_box">
<a name="about_info"></a>

<h5>
<div class="back_to_top"><a href="#top">&nbsp;Back to Top</a></div>
About the Tournament...</h5>
<p>text goes here</p>
<!-- about_box end --></div>



<?php require('../include/php_footer.txt'); ?>

<!-- container end --></div>

</body>
</html>
