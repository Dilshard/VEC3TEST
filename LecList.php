<?php 
include 'connection.php';

if(isset($_SESSION['Login'])){
    if(!$_SESSION['Login']=="lecturer"){
        header("Location: index.php");
    }
}else{
    header("Location: lecturerlogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEC - LecList</title>
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
        
            <div class="col-md-8 offset-md-2">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php

                        

                        $sql = "SELECT * FROM lecturer";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>".$row["firstname"]." ".$row["lastname"]."</td>
                            <td>".$row["contact"]."</td>
                            <td>".$row["gender"]."</td>
                            <td>".$row["address"]."</td>
                            <td>
                                <a href='LecEdit.php?id=$row[id]' class='btn btn-warning'>Edit</a>
                                <a href='LecDel.php?id=$row[id]' class='btn btn-danger'>Delete</a>
                            </td>
                            </tr>";
                        }
                        } else {
                        echo "0 results";
                        }

                    ?>                      
                    </tbody>
                  </table>
                  <a href="LecReg.php" class="btn btn-warning">New Record</a>
                  <a href="index.php" class="btn btn-success">Home</a>
            </div>

        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>