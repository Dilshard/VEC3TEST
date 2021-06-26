<!DOCTYPE html>
<html lang="en">

<?php
include 'connection.php';

if(isset($_SESSION['Login'])){
  if(!$_SESSION['Login']=="lecturer"){
      header("Location: index.php");
  }
}else{
  header("Location: lecturerlogin.php");
}

if(isset($_POST["btnsubmit"])){

    $firstname = $_POST['txtfirstname'];
    $lastname = $_POST['txtlastname'];
    $contact = $_POST['txtcontact'];
    $gender = $_POST['txtgender'];
    $address = $_POST['txtaddress'];

    $username = $_POST['txtusername'];
    $pass = $_POST['txtpass'];

    $sql = "INSERT INTO `lecturer` (`firstname`, `lastname`, `gender`, `address`, `contact`) VALUES ('$firstname', '$lastname', '$gender', '$address', $contact);";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEC - LecReg - 02</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
<?php include 'nav.php'; ?>
    <div class="container">

        <!-- logo start -->
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <img src="images/logo.png" alt="" width="200px" class="mx-auto d-block m-4">
            </div>
        </div>
        <!-- logo end -->


        <div class="row">

            <div class="col-md-6 offset-md-3">

            <form method="POST">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">First Name</label>
                    <input name="txtfirstname" type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Last Name</label>
                    <input name="txtlastname" type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Contact</label>
                    <input name="txtcontact" type="number" class="form-control" id="inputEmail4" placeholder="Contact">
                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Uesr name</label>
                    <input name="txtusername" type="text" class="form-control" id="inputEmail4" placeholder="User Name">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input name="txtpass" type="password" class="form-control" id="inputPassword4" placeholder="Password">
                  </div>

                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Gender</label>
                      <select name="txtgender" id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Address</label>
                    <textarea name="txtaddress" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>

                
                <button name="btnsubmit" type="submit" class="btn btn-primary m-4">Register</button>
                <button name="btnreset" type="reset" class="btn btn-primary">Reset</button>
                <a href="LecList.php" class="btn btn-outline-success">View</a>
              
              </form>
            </div>
        </div>
    </div>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</body>
</html>