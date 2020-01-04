
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>
<body>
<form name="form" method="post" action="">
<label><strong>Select Tournaments:</strong></label><br />
<table border="0" width="60%">
<tr>
<?php
$count = 0;
$query = mysqli_query($con,"SELECT * FROM Table 1");
foreach($query as $row){
 $count++;
?>
<td width="3%">
<input type="checkbox" name="sports[]" 
value="<?php echo $row["ID"]; ?>">
</td>
<td width="30%">
<?php echo $row["Tournament_Name"]; ?>
</td>
<?php
if($count == 3) { // three items in a row
        echo '</tr><tr>';
        $count = 0;
    }
} ?>
</tr>
</table>
<input type="submit" name="submit" value="Submit">
</form>
 
<br />
<?php echo $status; ?>
</body>
</html>