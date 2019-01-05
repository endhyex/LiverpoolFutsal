<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Liverpool Futsal Depok</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

		<!-- Load File bootstrap.min.css yang ada difolder css -->
		
		<link rel="stylesheet" href="res/css/style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
		.align-middle{
			vertical-align: middle !important;
		}
		</style>
	</head>
	<body>
	<div class="site-content">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                <a href="adminHome.php" class="nav-brand ml-3 mr-3">
                <img src="res/img/liverpool-logo.png" width="100" height="57" class="d-inline-block align-top" alt=""> </a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="adminTransaction.php" style="margin-right:20px">Transaction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminPrice.php" style="margin-right:20px">Price List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminField.php" style="margin-right:20px">Field</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="margin-right:40px">Logout</a>
                    </li>           
                </ul>
            </nav>
        </header>

		<div class="landing-text ml-5 mt-3">
            <h1>Transaction Data</h1>
			<!--
			-- Buat sebuah div dengan class row
			-- class row ini berfungsi untuk membagi-bagi layar
			-- di dalam bootstrap, 1 layar penuh (dari kiri ke kanan) dibagi menjadi 12 bagian / Kolom
			-- Atau lebih tepatnya sering disebut dengan GRID
			-- col-xs-12 artinya jika ukuran layar < 768px, maka gunakan 12 kolom
			-- col-sm-6 artinya jika ukuran layar >= 768px, maka gunakan 6 kolom
			-- Untuk lebih jelasnya soal Grid, silahkan buka link ini : http://viid.me/qb4V8P
			-->
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<!--
					-- Input Group adalah salah satu komponen yang disediakan bootstrap
					-- Untuk lebih jelasnya soal Input Group, silahkan buka link ini : http://viid.me/qb4Mup
					-->
					<div class="input-group">
						<!-- Buat sebuah textbox dan beri id keyword -->
						<input type="text" class="form-control" placeholder="Pencarian..." id="keyword">
						
						<span class="input-group-btn">
							<!-- Buat sebuah tombol search dan beri id btn-search -->
							<button class="btn btn-primary" style="margin-left:5px" type="button" id="btn-search">SEARCH</button>
							<a href="" class="btn btn-warning">RESET</a>
						</span>
					</div>
				</div>
			</div>
			<br>
			
			<!--
			-- Beri atribut id="view" pada tag div yang akan digunakan untuk menampung data 
			-- yang ada pada tabel siswa di database dan paginationnya
			-->
			<div id="view"><?php include "view.php"; ?></div>
		</div>
		
		<!-- Load File jquery.min.js yang ada difolder js -->
		<script src="js/jquery.min.js"></script>
		
		<!-- Load File bootstrap.min.js yang ada difolder js -->
		<script src="js/bootstrap.min.js"></script>
		
		<!-- Load file ajax.js yang ada di folder js -->
		<script src="js/ajax.js"></script>
	</div>
	</body>
</html>

