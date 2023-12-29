<?php
 include 'conn.php';
 		$id=$_GET['id'];
        
            $query = "DELETE FROM `practice` WHERE `id`='$id'";

            $wquery= mysqli_query($connection,$query);

            header('location:view.php');
  
?> 