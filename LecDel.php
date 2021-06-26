<?php
include 'connection.php';

$id = $_GET['id'];


$sql = "DELETE FROM lecturer WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: LecList.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}