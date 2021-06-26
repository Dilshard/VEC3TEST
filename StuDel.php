<?php
include 'connection.php';

$id = $_GET['stuid'];


$sql = "delete from student where id=$id;";

if(mysqli_query($conn, $sql)){
    header("Location: StuList.php");
}else{
    echo "NOT Deleted!";
}