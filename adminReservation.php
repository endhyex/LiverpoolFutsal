<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liverpool Futsal - Reservation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="adminHome.php" style="margin-left:20px">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="#" style="margin-left:40px">Reservation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="adminTransaction.php" style="margin-left:40px">Transaction</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="text-info" style="margin-right:10px">Logged in as Administrator</a>
  </ul>
</nav>
<div class="container">
<br><br>
<h2 class="form-heading">Add new reservation</h2>
<br>
    <form id="Reservation">
        <div class="form-group">
            <input type="text" class="form-control" id="inputName" placeholder="Full name" required>
        </div>
		<div class="form-group">
            <input type="text" class="form-control" id="input" placeholder="Full name" required>
        </div>
		<div class="form-group">
            <input type="text" class="form-control" id="inputName" placeholder="Full name" required>
        </div>
		<div class="form-group">
            <input type="text" class="form-control" id="inputName" placeholder="Full name" required>
        </div>
		<div class="form-group">
            <input type="text" class="form-control" id="inputName" placeholder="Full name" required>
        </div>
		<div class="form-group">
            <input type="text" class="form-control" id="inputName" placeholder="Full name" required>
        </div>
        <button type="submit" class="btn btn-primary">Reserve!</button>

    </form>
</div>
</body>
</html>
