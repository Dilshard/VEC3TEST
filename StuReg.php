<!DOCTYPE html>
<html lang="en">
<?php

include 'connection.php';

if(isset($_SESSION['Login'])){
    if(!$_SESSION['Login']=="student"){
        header("Location: index.php");
    }
  }else{
    header("Location: studentlogin.php");
}


if(isset($_POST['btnsubmit'])){

    $fullname = $_POST['txtfullname'];
    $contact = $_POST['txtcontact'];
    $address = $_POST['txtaddress'];
    $gender = $_POST['txtgender'];
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];

    $sql = "INSERT INTO student(fullname,gender,contact,address,username,password) VALUES('$fullname','$gender','$contact','$address','$username','$password ')";

    if(mysqli_query($conn, $sql)){
        header("Location: StuList.php");
    }else{
        echo "Error!";
    }
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEC - StuReg - 03</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    .form-group{
        padding: 10px 2px 10px;
    }
    </style>
</head>
<body>
<?php include 'nav.php'?>
    

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
            <h1>Student Registration</h1>
                <form method="POST">
                    <div class="row mt-4">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Full Name</label>
                            <input value="" type="text" class="form-control" name="txtfullname">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Contact</label>
                            <input value="" type="number" class="form-control" name="txtcontact">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputGender">Gender</label><br>
                            <input value="" type="text" class="form-control" name="txtgender">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtaddress"></textarea>        
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Username</label>
                            <input value="" type="text" class="form-control" name="txtusername">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputState">Password</label>
                            <input value="" type="text" class="form-control" name="txtpassword">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="btnsubmit">Save</button>
                    <button type="reset" class="btn btn-warning" name="btnsubmit">Clear</button>
                </form>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>