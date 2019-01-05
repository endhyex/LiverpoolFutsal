<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
		<th style="padding-right:40px">ID</th>
            <th style="padding-right:90px">Date</th>
            <th style="padding-right:40px">Start</th>
            <th style="padding-right:40px">End</th>
            <th style="padding-right:40px">Duration</th>
            <th style="padding-right:40px">Field</th>
            <th>Status</th>
		</tr>
		<?php
		// Include / load file koneksi.php
		include "dbConnect.php";
		

		// Cek apakah variabel data search tersedia
		// Artinya cek apakah user telah mengklik tombol search atau belum
		if(isset($_POST['search']) && $_POST['search'] == true){ // Jika ada data search yg dikirim (user telah mengklik tombol search) dan search sama dengan true
			// variabel $keyword ini berasal dari file search.php,
			// dimana isinya adalah apa yang diinput oleh user pada textbox pencarian
			$param = '%'.mysqli_real_escape_string($db_connection, $keyword).'%';
			
			// Buat query untuk menampilkan data siswa berdasarkan NIS / Nama / Jenis Kelamin / Telp / Alamat
			// dan sesuai limit yang ditentukan
			$sql = mysqli_query($db_connection, "SELECT * FROM booking WHERE id LIKE '".$param."' OR tgl LIKE '".$param."' OR field LIKE '".$param."' OR status LIKE '".$param."' OR duration LIKE '".$param."'");
			
			// Buat query untuk menghitung semua jumlah data
			// dengan keyword yang telah di input
			$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM booking WHERE id LIKE '".$param."' OR tgl LIKE '".$param."' OR field LIKE '".$param."' OR status LIKE '".$param."' OR duration LIKE '".$param."'");
			$get_jumlah = mysqli_fetch_array($sql2);
		}else{ // Jika user belum mengklik tombol search (PROSES TANPA AJAX)
			// Buat query untuk menampilkan semua data siswa
			$sql = mysqli_query($db_connection, "SELECT * FROM booking");
			
			// Buat query untuk menghitung semua jumlah data
			$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM booking");
			$get_jumlah = mysqli_fetch_array($sql2);
		}

		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
			?>
				<tr>
					<td class="align-middle"><?php echo $data['id']; ?></td>
					<td class="align-middle"><?php echo $data['tgl']; ?></td>
					<td class="align-middle"><?php echo $data['start']; ?></td>
					<td class="align-middle"><?php echo $data['end']; ?></td>
					<td class="align-middle"><?php echo $data['duration']; ?></td>
					<td class="align-middle"><?php echo $data['field']; ?></td>
					<td class="align-middle"><?php echo $data['status']; ?></td>
				</tr>
			<?php
			}
			?>
		</table>
</div>

