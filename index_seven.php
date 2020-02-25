<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<title>Retrieve Or Fetch Data From MySQL Database Using PHP With Boostrap</title>

<?php include "head_other_db.php"; ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Tournament List</h2>
                        <a href="create_other_db.php" class="btn btn-success pull-right">Add New Tournament</a>
                    </div>
                   <?php
                    include_once 'connection_other_db.php';
                    $result = mysqli_query($conn,"SELECT * FROM tournaments");
                    ?>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                      
                      <tr>
                        <td>Name</td>
                        <td>Date</td>
                        <td>Club</td>
                        <td>Type</td>
                        <td>Page</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["date"]; ?></td>
                        <td><?php echo $row["club"]; ?></td>
                        <td><?php echo $row["type"]; ?></td>
                        <td><?php echo $row["url"]; ?></td>
                        <td><a href="update_other_db.php?id=<?php echo $row["id"]; ?>" title='Update Record'><span class='glyphicon glyphicon-pencil'></span></a>
                        <a href="delete_other_db.php?id=<?php echo $row["id"]; ?>" title='Delete Record'><i class='material-icons'><span class='glyphicon glyphicon-trash'></span></a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>

                </div>
            </div>     
        </div>

</body>
</html>