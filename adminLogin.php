<?php
$db_connection = mysqli_connect("127.0.0.1", "root","", "liverpool");
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Liverpool Futsal Depok</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="res/css/style.css">
  </head>
<body id="LoginAdminForm">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <a href="index.php" class="nav-brand ml-3 mr-3">
            <img src="res/img/liverpool-logo.png" width="100" height="57" class="d-inline-block align-top" alt=""> </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php" style="margin-right:20px">Login as user</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="adminLogin.php" style="margin-right:40px">Login as admin</a>
                </li>           
            </ul>
        </nav>
    </header>
<div class="container">
<br><br>
<h1 class="form-heading">Login as admin</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <p>Please enter your email and password</p>
   </div>
    <form id="Login">

        <div class="form-group">
            <input type="text" class="form-control" id="inputAdmin" placeholder="Admin Username" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" placeholder="Admin Password" required>
        </div>
		
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
</div></div></div>


</body>
</html>
