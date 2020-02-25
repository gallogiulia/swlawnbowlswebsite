<?php
include_once("db_connect.php");
$sqlEvents = "SELECT id, tournament_name, start_date, url, end_date FROM events LIMIT 20";
$resultset = mysqli_query($conn, $sqlEvents) or die("database error:". mysqli_error($conn));
$calendar = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {	
	// convert  date to milliseconds
	$start = strtotime($rows['start_date']) * 1000;
	$end = strtotime($rows['end_date']) * 1000;	
	$calendar[] = array(
        'id' =>$rows['id'],
        'title' => $rows['tournament_name'],
        'url' => $rows['url'],
		"class" => 'event-important',
        'start' => "$start",
        'end' => "$end"
        
        
    );
}
$calendarData = array(
	"success" => 1,	
    "result"=>$calendar);
echo json_encode($calendarData);
exit;
?>