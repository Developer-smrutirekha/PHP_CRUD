<!DOCTYPE html>
<html>

<head>
  <tittle>crud operation</tittle>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <?php
  $id = $_GET['id'];
  $name = $_GET['name'];
  $age = $_GET['age'];
  $email = $_GET['email'];
  ?>

  <div style="display: flex;justify-content: center;">
    <form action="update.php" method="post">



      <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" name="id" id="name" value='<?php echo $id; ?>' hidden>
        <input type="text" class="form-control" name="name" id="name" value='<?php echo $name; ?>'>
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age" value='<?php echo $age; ?>'>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" value='<?php echo $email; ?>'>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>