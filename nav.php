<style>

.navbar{
    padding: 15px;
}

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">VEC</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php

                if(isset($_SESSION['Login'])){
                    if($_SESSION['Login']=="student"){
                        ?>
                            <li class="nav-item">
                            <a class="nav-link" href="StuList">Student</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link" href="#">Exams</a>
                            </li>
                   
                        <?php
                    }else if($_SESSION['Login']=="lecturer"){
                        ?>
                            <li class="nav-item">
                            <a class="nav-link" href="LecList.php">Lecturer</a>
                            </li>

                        <?php
                    }
                }

            ?>

                            <li class="nav-item">   
                            <?php
                                if(!isset($_SESSION['loggeduser'])){
                                    echo '<a class="btn btn-outline-danger" href="LoginSelection.php">Login</a>';
                                }else{
                                    echo '<a class="btn btn-outline-danger" href="Logout.php">'.$_SESSION['loggeduser'].'</a>';
                                }
                            ?>
                            </li> 
        </ul>
    </div>

    
</nav>



