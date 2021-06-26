<?php
SESSION_START();


if(isset($_SESSION['email'])){
    echo $_SESSION['email'];
}else{
    echo "Session is not initialzed yet!";
}

