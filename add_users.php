<?php
require_once "connection_other_db.php";
 
if(isset($_POST['save']))
{    
 
     $name = $_POST['name'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
     $sql = "INSERT INTO users (name,mobile,email)
     VALUES ('$name','$mobile','$email')";
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
                <div class="col-lg-12 mx-auto">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Users List</h2>
                        <a href="create_other_db.php" class="btn btn-success pull-right">Add New User</a>
                    </div>
                   <?php
                    include_once 'connection_other_db.php';
                    $result = mysqli_query($conn,"SELECT * FROM users");
                    ?>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                      
                      <tr>
                        <td>Name</td>
                        <td>Email id</td>
                        <td>Mobile</td>
                        <td>Action</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo ($row["mobile"])?($row["mobile"]):('N/A'); ?></td>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" name="mobile" class="form-control" value="" maxlength="12" required="">
                        </div>
 
                        <input type="submit" class="btn btn-primary" name="save" value="submit">
                        <a href="index_seven.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
 
            </div> 
                
        </div>

        <?php
// Include database connection file
require_once "connection_other_db.php";
 
    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE users set  name='" . $_POST['name'] . "', mobile='" . $_POST['mobile'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
      
     header("location: index_seven.php");
     exit();
    }
    $result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
   
?>

    <?php include "head_other_db.php"; ?>

 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>" maxlength="50" required="">
                             
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="mobile" name="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>" maxlength="12"required="">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index_seven.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>  
        </div>
     

</body>
</html>