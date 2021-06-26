<?php
include 'connection.php';

if(isset($_SESSION['Login'])){
    if(!$_SESSION['Login']=="student"){
        header("Location: index.php");
    }
  }else{
    header("Location: studentlogin.php");
}


$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE id=$id";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
       $fullname = $row['fullname'];
       $contact = $row['contact'];
       $address = $row['address'];
       $gender = $row['gender'];
       $username = $row['username'];
       $password = $row['password'];
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    .form-group{
        padding: 10px 2px 10px;
    }
    </style>
</head>
<body>
<?php include_once 'nav.php'?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="POST">
                    <div class="row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Full Name</label>
                            <input value="<?php echo $fullname;?>" type="text" class="form-control" name="txtfullname">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Contact</label>
                            <input value="<?php echo $contact;?>" type="number" class="form-control" name="txtcontact">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputGender">Gender</label><br>
                            <input value="<?php echo $gender;?>" type="text" class="form-control" name="txtgender">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtaddress"><?php echo $address ?></textarea>        
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Username</label>
                            <input value="<?php echo $username;?>" type="text" class="form-control" name="txtusername">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputState">Password</label>
                            <input value="<?php echo $password;?>" type="text" class="form-control" name="txtpassword">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="btnsave">Save</button>
                    <a class="btn btn-success" href="StuList.php">View</a>
                </form>
                <?php
                    if(isset($_POST['btnsave'])){
                        $fullname = $_POST['txtfullname'];
                        $contact = $_POST['txtcontact'];
                        $address = $_POST['txtaddress'];
                        $gender = $_POST['txtgender'];
                        $username = $_POST['txtusername'];
                        $password = $_POST['txtpassword'];

                        $sqlUpdate = "UPDATE student SET fullname = '$fullname', gender = '$gender', contact = '$contact', address = '$address', username = '$username', password = '$password' WHERE id = $id;";

                        if(mysqli_query($conn, $sqlUpdate)){
                            header("Location: StuList.php");
                        }else{
                            echo "Error";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

