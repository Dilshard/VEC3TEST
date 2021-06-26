<?php

include 'connection.php';

if(isset($_SESSION['Login'])){
  if(!$_SESSION['Login']=="student"){
      header("Location: index.php");
  }
}else{
  header("Location: studentlogin.php");
}

$sql = "SELECT * FROM student";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<?php include 'nav.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">

      <h1 class="display-5 mt-4">Registered Students</h1>

        <table class="table table-striped">

          <thead>
            <tr>
              <th scope="col">Full Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Contact</th>
              <th scope="col">Address</th>
              <th scope="col">User name</th>
              <th scope="col">Password</th>
              <th scope="col">Action</th>
            </tr>
          </thead>

          <tbody>
            <?php
            if(mysqli_num_rows($result) > 0){

              while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                  echo "<td>".$row['fullname']."</td>";
                  echo "<td>".$row['gender']."</td>";
                  echo "<td>".$row['contact']."</td>";
                  echo "<td>".$row['address']."</td>";
                  echo "<td>".$row['username']."</td>";
                  echo "<td>".$row['password']."</td>";
                  echo "<td>
                  <a class=\"btn btn-danger\" href=StuDel.php?stuid=".$row['id']."><i class=\"bi bi-trash\"></i></a>
                  <a class=\"btn btn-warning\" href=StuEdit.php?id=".$row['id']."><i class=\"bi bi-pencil-square\"></i></a></td>";
                echo "</tr>";
              }

            }else{
            echo "No records in student table!";
            }


            ?>
          </tbody>

        </table>
        <a class="btn btn-success" href="StuReg.php"><i class="bi bi-person-plus"></i> New Student</a>

      </div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>





