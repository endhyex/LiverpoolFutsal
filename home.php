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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="res/css/style.css">     

</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <a href="index.php" class="nav-brand ml-3 mr-3">
            <img src="res/img/liverpool-logo.png" width="100" height="57" class="d-inline-block align-top" alt=""> </a>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-Left:20px">My Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-Left:40px">History</a>
                </li>  
            </ul> 

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" style="margin-Right:50px" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons" style="font-size:30px">account_circle</i> Full Name</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </li>        
            </ul>
        </nav>
    </header>


    <div class="mt-3 ml-4 mb-1" style="max-width: 60%">
        <h1>Reservation</h1>
        <p>Search for available field</p>

        <label class= "mt-3"for="">Insert Date</label>
        <form action="home.php" method="post">
            <input type="date" class="form-control" name="date" required>
        
            <div class="form-group mt-3">
                <label> Select Field </label>
                <select name = "field" class="form-control" required>
                    <option disabled>--select field--</option>
                    <option value="1">Field 1</option>
                    <option value="2">Field 2</option>
                    <option value="3">Field 3</option>
                    <option value="4">Field 4</option>
                </select>   
            </div>
            
            <input type="submit"  class="btn btn-primary mt-1" name="date_search" value="Search!">
        </form>
    </div>

    <h1 class="ml-4 mt-5">Reserved</h1>
    <div class="card border-primary mt-3 ml-4 mb-3 shadow-sm" style="max-width: 60%;">
    <div class="card-body ml-1">
        <h5 class="card-title">10.00 - 12.00</h5>
        <p class="card-text">Status: Waiting for Confirmation</p>        
    </div>
    </div>
    <div class="card border-primary mt-3 ml-4 mb-3" style="max-width: 60%;">
    <div class="card-body ml-1">
        <h5 class="card-title">13.00 - 15.00</h5>
        <p class="card-text">Status: Booked</p>        
    </div>
    </div>


    <?PHP
    if (isset($_POST['date_search'])){
        $field = $_POST['field'];
        $date = $_POST['date'];
        $query = "select * from booking where tgl = '$date' and field=$field;";
        $query_run = mysqli_query($db_connection,$query);
        $num_rows=mysqli_num_rows($query_run);      
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>