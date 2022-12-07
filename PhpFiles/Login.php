<?php
session_start();
  include("Connections/Connections.php");
  include("Functions/Functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
      $querry = "Select * from users2 where user_name = '$user_name' limit 1";

      $result = mysqli_query($con, $querry);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0 )
        {

            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password)
            {
              $_SESSION['user_id'] = $user_data['user_id'];
              header("Location: HomeLogoutAdmin.php");
              die;
            }
        }
      }
    }
  }


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login to your account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/login.css">
</head>


<body>
  <!-- slider si login -->
  <div class="content">
    <div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active c1">
          <div class="overlay"></div>
        </div>
        <div class="carousel-item c2">
          <div class="overlay"></div>
        </div>
        <div class="carousel-item c3">
          <div class="overlay"></div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="login">
      <img src="img/CSM-SV.png" alt="CSM-SV" class="logo">
      <h1>Welcome to the Team</h1>
      <form method="post">
        <div class="textf">
          <input id="text" type="text" name="user_name" required>
          <span></span>
          <label> <img src="img/login.png" alt="username" class="user"> Username</label>
        </div>
        <div class="textf">
          <input id="text" type="password" name="password" required>
          <span></span>
          <label> <img src="img/lock.png" alt="pass" class="pass"> Password</label>
        </div>
        <div class="remcheck">
          <input type="checkbox" name="remember" class="remember">
          <label for="remember" class="remlbl">Remember me</label>
        </div>

        <input id="button" type="submit" value="Login" name="Login" class="submit">
      </form>
    </div>
  </div>
  <!-- slider si login -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>