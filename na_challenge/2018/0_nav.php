<?php


echo '
<ul class="nav">
 <li><a href="index.php">                       Home          </a></li>
 <li><a href="schedule.php">                    Schedule      </a></li>
 <li><a href="players.php">                     Players       </a></li>
 <li><a href="lodging.php">                     Lodging       </a></li>
 <li><a href="sponsors.php">                    Sponsors      </a></li>
 <li><a href="merchandise.php">                 Merchandise   </a></li>
 <li><a href="raffle.php">                      Raffle        </a></li>
';

// this code is used in the menu to select the appropriate Results page based on the current date and time
// the timestamp is the time the last matches start
// the results page that is delivered with the "Results" menu choice is determined by the difference in hours between $ts and $rightnow

$target_hour   =    9;     //the meetinghour based on 24-hour clock
$target_minute =    0;     //the minutes past the hour
$target_second =    0;     //the seconds past the minute
$target_month  =   10;     //the month - 1=JAN 2=FEB 3=MAR 4=APR 5=MAY=6=JUN 7=JUL 8=AUG 9=SEP 10-OCT 11=NOV 12=DEC
$target_day    =   20;     //the day of the month
$target_year   = 2013;     //the year

// $ts is the computer timestamp based on the information above
$ts = mktime($target_hour, $target_minute, $target_second, $target_month, $target_day, $target_year);


// $rightnow is the current time in seconds since midnight Jan 1, 1970
$rightnow = time();


// $timetogo is the difference in hours
$timetogo = ($ts-$rightnow)/3600;


// the if statement triggers the action when the hours to go are between the values shown


if($timetogo<0)
    {echo ' <li><a href="results_r7.php">  Results               </a></li>';}
elseif($timetogo<20)
    {echo ' <li><a href="results_r6.php">  Results               </a></li>';}
elseif($timetogo<24)
    {echo ' <li><a href="results_r5.php">  Results               </a></li>';}
elseif($timetogo<44)
    {echo ' <li><a href="results_r4.php">  Results               </a></li>';}
elseif($timetogo<48)
    {echo ' <li><a href="results_r3.php">  Results               </a></li>';}
elseif($timetogo<68)
    {echo ' <li><a href="results_r2.php">  Results               </a></li>';}
else
    {echo ' <li><a href="results_r1.php">  Results               </a></li>';}
echo '
</ul>
';

?>
