<!DOCTYPE html>
<html>

<head>
    <tittle>crud operation</tittle>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    </head>

<body>

<div class="container">
    <a href="signin.php"class="btn btn-dark ">Add new </a>
</div>
    <div style="display: flex;justify-content: center;">
        <div>
 <!-- <form action=".php" method="post"> -->


            <table class="table">
              
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                
     <?php
        include 'conn.php';

        $query = "SELECT * FROM `practice`";
        $result = mysqli_query($connection, $query );

        $x=1;
        while ($show = mysqli_fetch_array($result)) 
        
        {
           $y= $x++;
          $id=$show['id'];
          $name=$show['name'];
          $age=$show['age'];
          $email=$show['email']; 
          $Password=$show['password'];
   
         echo "<tr class='text-center'>
               <td> $y</td>
               <td> $name</td>
               <td>$age </td>
               <td>$email</td>
               <td>$Password</td>
               
               <th>
               <a href='delete.php?id=$id'<button type='delete' class='btn btn-outline-danger dt'>delete</button></a>

               <a href='edit.php?id=$id &name=$name &age=$age &email=$email '<button type='update' class='btn btn-outline-success dt'>update</button></a></th>";
                           
        }    
         ?>    
<!-- <button type="logout" class="btn btn-primary">logout</button>
<form action="login.php" method="post"> -->

</form>


        </body>
</html>
