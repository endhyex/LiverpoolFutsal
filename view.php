<script src='jquery-3.3.1.min.js' type='text/javascript'></script>

	<input type='hidden' id='sort' value='asc'>
	<div class="table-responsive">
		<table class="table table-bordered table-striped" id='empTable' >
			<thead><tr>
			<th><span onclick='sortTable("tgl");'>Date</span></th>
				<th><span onclick='sortTable("username");'>Username</span></th>
				<th ><span onclick='sortTable("phonenum");'>Phone Number</span></th>
				<th><span onclick='sortTable("start");'>Start</span></th>
				<th><span onclick='sortTable("end");'>End</span></th>
				<th><span onclick='sortTable("duration");'>Duration</span></th>
				<th><span onclick='sortTable("tipe");'>Field</span></th>
				<th><span onclick='sortTable("price");'>Income</span></th>
				<th>Action</th>
			</tr></thead>
			<?php
			include "dbConnect.php";
			

			if(isset($_POST['search']) && $_POST['search'] == true){ 
				$param = '%'.mysqli_real_escape_string($db_connection, $keyword).'%';
				
				$sql = mysqli_query($db_connection, "SELECT * FROM transaksi WHERE username LIKE '".$param."' OR tgl LIKE '".$param."' OR tipe LIKE '".$param."' OR phonenum like '".$param."'");
				
				$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM transaksi WHERE username LIKE '".$param."' OR tgl LIKE '".$param."' OR tipe LIKE '".$param."' OR phonenum like '".$param."'");
				$get_jumlah = mysqli_fetch_array($sql2);
			}else{ 
				$sql = mysqli_query($db_connection, "select * from transaksi order by tgl desc");
				
				$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM transaksi");
				$get_jumlah = mysqli_fetch_array($sql2);
			}

			while($data = mysqli_fetch_array($sql)){ 
				?>
					<tbody><tr>
						<td class="align-middle"><?php echo $data['tgl']; ?></td>
						<td class="align-middle"><?php echo $data['username']; ?></td>
						<td class="align-middle"><?php echo $data['phonenum']; ?></td>
						<td class="align-middle"><?php echo $data['start']; ?>.00</td>
						<td class="align-middle"><?php echo $data['end']; ?>.00</td>
						<td class="align-middle"><?php echo $data['duration']; ?> hour(s)</td>
						<td class="align-middle"><?php echo $data['tipe']; ?></td>
						<td class="align-middle"><?php echo $data['price']; ?></td>
						<td><a href="delete.php?transnum=<?php echo $data['transnum']; ?>" class="btn btn-danger">Delete</a></td>
					</tr></tbody>
				<?php
				}
				?>
			</table>
	</div>
<script>
        function sortTable(columnName){
            
            var sort = $("#sort").val();
            $.ajax({
                url:'fetch_details.php',
                type:'post',
                data:{columnName:columnName,sort:sort},
                success: function(response){
            
                    $("#empTable tr:not(:first)").remove();
                    
                    $("#empTable").append(response);
                    if(sort == "asc"){
                        $("#sort").val("desc");
                    }else{
                        $("#sort").val("asc");
                    }
                                
                }
            });
        }
    </script>