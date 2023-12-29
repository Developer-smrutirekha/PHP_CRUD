<?php
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$Password = $_POST['Password'];
include "conn.php";

$sql = "INSERT INTO practice (`name`,`age`,`email`,`Password`)
VALUES ('$name', '$age', '$email','$Password')";

$result = mysqli_query($connection ,$sql);

if ($result) {
    echo "Connected successfully";
header('location:view.php');
}

?>