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
            <div class="row mt-4">
                <div class="col-md-12">
                    <img src="https://picsum.photos/id/251/800/100" class="img-fluid rounded" alt="Responsive image" width= 100%>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 offset-md-3">
                    <a href="studentlogin.php">
                        <div class="card text-white bg-warning m-2" onmouseover="clickkk()" onmouseout="outmousepoint()" id="1">
                            <div class="card-body">
                                Student
                            </div>
                        </div>
                    </a>
            </div>

            <div class="col-md-3">
                <a href="lecturerlogin.php">
                    <div class="card text-white bg-warning m-2" onmouseover="aa()" onmouseout="bb()" id="2">
                        <div class="card-body">
                            Lecturer
                        </div>
                    </div>
                </a>
            </div>
        </div>


    <script>
    
        function clickkk(){
            var element = document.getElementById("1");
            element.classList.add("bg-danger");
        }

        function outmousepoint(){
            var element = document.getElementById("1");
            element.classList.remove("bg-danger");
        }

        function aa(){
            var element = document.getElementById("2");
            element.classList.add("bg-danger");
        }

        function bb(){
            var element = document.getElementById("2");
            element.classList.remove("bg-danger");
        }

    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>