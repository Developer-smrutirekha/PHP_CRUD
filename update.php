
<?php
include "conn.php";
// print_r($_POST);
// exit();
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

 $query = "UPDATE `practice` SET  `name`='$name', `age`='$age', `email`='$email'
         WHERE `id`=$id";

     $squery = mysqli_query($connection, $query);
     header('location:view.php');
?> 