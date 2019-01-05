<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead><tr>
		<th style="padding-right:40px">ID</th>
            <th style="padding-right:90px">Date</th>
            <th style="padding-right:40px">Start</th>
            <th style="padding-right:40px">End</th>
            <th style="padding-right:40px">Duration</th>
            <th style="padding-right:40px">Field</th>
            <th>Status</th>
		</tr></thead>
		<?php
		include "dbConnect.php";
		

		if(isset($_POST['search']) && $_POST['search'] == true){ 
			$param = '%'.mysqli_real_escape_string($db_connection, $keyword).'%';
			
			$sql = mysqli_query($db_connection, "SELECT * FROM booking WHERE id LIKE '".$param."' OR tgl LIKE '".$param."' OR field LIKE '".$param."' OR status LIKE '".$param."' OR duration LIKE '".$param."'");
			
			$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM booking WHERE id LIKE '".$param."' OR tgl LIKE '".$param."' OR field LIKE '".$param."' OR status LIKE '".$param."' OR duration LIKE '".$param."'");
			$get_jumlah = mysqli_fetch_array($sql2);
		}else{ 
			$sql = mysqli_query($db_connection, "SELECT * FROM booking");
			
			$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM booking");
			$get_jumlah = mysqli_fetch_array($sql2);
		}

		while($data = mysqli_fetch_array($sql)){ 
			?>
				<tbody><tr>
					<td class="align-middle"><?php echo $data['id']; ?></td>
					<td class="align-middle"><?php echo $data['tgl']; ?></td>
					<td class="align-middle"><?php echo $data['start']; ?></td>
					<td class="align-middle"><?php echo $data['end']; ?></td>
					<td class="align-middle"><?php echo $data['duration']; ?></td>
					<td class="align-middle"><?php echo $data['field']; ?></td>
					<td class="align-middle"><?php echo $data['status']; ?></td>
				</tr></tbody>
			<?php
			}
			?>
		</table>
</div>

