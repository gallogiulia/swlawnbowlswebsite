<?php
require_once "connection_other_db.php";

if(isset($_POST['save']))
{    

     $name = $_POST['name'];
     $date = $_POST['date'];
     $club = $_POST['club'];
     $type = $_POST['type'];
     $url = $_POST['url'];
     $sql = "INSERT INTO tournaments (name,date,club,type,url)
     VALUES ('$name','$date','$club','$type','$url')";
     if (mysqli_query($conn, $sql)) {
        header("location: index_seven.php");
        exit();
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <?php include "head_other_db.php"; ?>
</head>
<body>
 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add tournament record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        </div>
                        <div class="form-group ">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" value="" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Club</label>
                            <input type="text" name="club" class="form-control" value="" maxlength="12" required="">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="type" class="form-control" value="" maxlength="12" required="">
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <input type="text" name="url" class="form-control" value="" maxlength="12" required="">
                        </div>

                        <input type="submit" class="btn btn-primary" name="save" value="submit">
                        <a href="index_seven.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>

            </div> 
               
        </div>

</body>
</html>
