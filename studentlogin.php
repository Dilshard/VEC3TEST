<!DOCTYPE html>
<html lang="en">
<?php include 'connection.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEC - Student Login</title>
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<?php include 'nav.php'; ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4 offset-md-4">
            <h1 class="display-4">Studnet Login</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input name="txtusername" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input id="myInput" name="txtpassword" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" onclick="myFunction()">
                    <label class="form-check-label" for="exampleCheck1">Show password</label>
                </div>
                <button name="btnlogin" type="submit" class="btn btn-primary">Login</button>
            </form>
            </div>
        </div>
    </div>


<?php

    if(isset($_POST['btnlogin'])){
        $username = $_POST['txtusername'];
        $password = $_POST['txtpassword'];

        $sql = "SELECT * FROM student WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result) > 0) {

            while($row = mysqli_fetch_assoc($result)) {
                $_SESSION['loggeduser'] = $row["username"];
                $_SESSION['Login'] = "student";
                header("Location: StuList.php");
            }
            } else {
            echo "0 results";
            }
    }

?>
<script>

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>