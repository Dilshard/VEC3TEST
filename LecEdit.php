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

$id = $_GET['id'];



      $sql = "SELECT * FROM lecturer WHERE id=$id";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
          $fname = $row["firstname"];
          $lname = $row["lastname"];
          $gender = $row["gender"];
          $contact = $row["contact"];
          $address = $row["address"];
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
                    <input value="<?php echo $fname?>" name="txtfirstname" type="text" class="form-control" id="inputEmail4" placeholder="First Name">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Last Name</label>
                    <input value="<?php echo $lname?>" name="txtlastname" type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
                  </div>

                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Contact</label>
                    <input value="<?php echo $contact?>" name="txtcontact" type="number" class="form-control" id="inputEmail4" placeholder="Contact">
                  </div>

                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Gender</label>
                      <select name="txtgender" id="inputState" class="form-control">
                        <?php
                        if($gender == "Male"){
                          echo "<option selected>Male</option>";
                          echo "<option>Female</option>";
                        }else{
                          echo "<option selected>Female</option>";
                          echo "<option>Male</option>";
                        }
                        ?>
                      </select>
                    </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Address</label>
                    <textarea name="txtaddress" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $address?></textarea>
                  </div>
                </div>

                
                <button name="btnsubmit" type="submit" class="btn btn-success m-4">Save</button>
                <button name="btnreset" type="reset" class="btn btn-primary">Reset</button>
                <a href="LecList.php" class="btn btn-outline-success">View</a>
              
              </form>
            </div>
        </div>
    </div>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</body>
</html>


<?php 


if(isset($_POST["btnsubmit"])){

    $firstname = $_POST['txtfirstname'];
    $lastname = $_POST['txtlastname'];
    $contact = $_POST['txtcontact'];
    $gender = $_POST['txtgender'];
    $address = $_POST['txtaddress'];

    $sql2 = "UPDATE `lecturer` SET `firstname` = '$firstname', `lastname` = '$lastname', `gender` = '$gender', `address` = '$address', `contact` = '$contact' WHERE `lecturer`.`id` = $id;";

    if (mysqli_query($conn, $sql2)) {
      header("Location: LecList.php");
    } else {
      echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }

}
?>