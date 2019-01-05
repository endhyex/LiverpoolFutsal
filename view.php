<script src='jquery-3.3.1.min.js' type='text/javascript'></script>

	<input type='hidden' id='sort' value='asc'>
	<div class="table-responsive">
		<table class="table table-bordered table-striped" id='empTable'>
			<thead><tr>
			<th style="padding-right:40px"><span onclick='sortTable("tgl");'>Date</span></th>
				<th style="padding-right:90px"><span onclick='sortTable("username");'>Username</span></th>
				<th style="padding-right:90px"><span onclick='sortTable("phonenum");'>Phone Number</span></th>
				<th style="padding-right:40px"><span onclick='sortTable("start");'>Start</span></th>
				<th style="padding-right:40px"><span onclick='sortTable("end");'>End</span></th>
				<th style="padding-right:40px"><span onclick='sortTable("duration");'>Duration</span></th>
				<th style="padding-right:90px"><span onclick='sortTable("tipe");'>Field</span></th>
				<th style="padding-right:90px"><span onclick='sortTable("status");'>Status</span></th>
			</tr></thead>
			<?php
			include "dbConnect.php";
			

			if(isset($_POST['search']) && $_POST['search'] == true){ 
				$param = '%'.mysqli_real_escape_string($db_connection, $keyword).'%';
				
				$sql = mysqli_query($db_connection, "SELECT tgl, username, phonenum, start, end, duration, tipe, status from booking inner join customer on customer.id=booking.id
				inner join field on field.fieldnum=booking.id WHERE username LIKE '".$param."' OR tgl LIKE '".$param."' OR tipe LIKE '".$param."' OR phonenum like '".$param."' OR status LIKE '".$param."' order by tgl desc");
				
				$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM booking inner join customer on customer.id=booking.id
				inner join field on field.fieldnum=booking.id WHERE username LIKE '".$param."' OR tgl LIKE '".$param."' OR tipe LIKE '".$param."' OR phonenum like '".$param."' OR status LIKE '".$param."' order by tgl desc");
				$get_jumlah = mysqli_fetch_array($sql2);
			}else{ 
				$sql = mysqli_query($db_connection, "select tgl, username, phonenum, start, end, duration, tipe, status from booking inner join customer on customer.id=booking.id
				inner join field on field.fieldnum=booking.id order by tgl desc");
				
				$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM booking");
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
						<td class="align-middle"><?php echo $data['status']; ?></td>
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

