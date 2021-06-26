<!DOCTYPE html>
<html lang="en">
<?php include 'connection.php';?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEC - Home - 01</title>
    <!-- <link rel="stylesheet" href="style/style.css"> -->
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
            <div id="carouselExampleSlidesOnly" class="carousel slide mb-4" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="https://picsum.photos/id/1033/800/250" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/id/1029/800/250" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/800/250" alt="Third slide">
                  </div>
                </div>
              </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title">Admin</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Admin</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <!-- <a href="#" class="card-link">Card link</a> -->
                      <button class="btn btn-success">Register</button>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width:  100%;">
                    <div class="card-body">
                      <h5 class="card-title">Lecturer</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="LecReg.php" class="btn btn-success">Register</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width:  100%;">
                    <div class="card-body">
                      <h5 class="card-title">Student</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="StuReg.php" class="btn btn-success">Register</a>
                    </div>
                  </div>
            </div>
        </div>

              <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>
        
    </div>



    <script>

        function Click(){
            window.location.href = "09-ScheExam.html";
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>