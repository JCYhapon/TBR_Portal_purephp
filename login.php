<?php 
  include_once 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Room App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form class="border shadow p-5 rounded" action="#" method="post" style="width: 450px;">
        <h1 class="text-center p-4 mb-4">Hello Again!</h1>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="text" class="form-control" name="input_email" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" name="input_password" id="password">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Keep Me Signed In</label>
        </div>
        <div class="d-flex justify-content-center"> <!-- Center the button -->
            <button type="submit" class="btn btn-dark mt-3" style="width: 150px;">Login</button>
        </div>
      </form>
</div>
</body>
</html>

