<!DOCTYPE html>
<html>
    <head>
        <tittle>crud operation</tittle>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div style="display: flex;justify-content: center;">
            <form action="insert.php" method="post">

            
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text"class="form-control" name="name" id="name" >
                  </div>
                  <div class="mb-3">
                    <label for="age" class="form-label">age</label>
                    <input type="text" class="form-control" name="age" id="age">
                  </div>
                  
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email"  aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <input type="password" class="form-control" name="Password" id="Password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" >Submit</button>
          </form>
</div>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    </body>
</html>
