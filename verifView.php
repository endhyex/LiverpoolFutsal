<script src='jquery-3.3.1.min.js' type='text/javascript'></script>

	<input type='hidden' id='sort' value='asc'>
	<div class="table-responsive">
		<table class="table table-bordered table-striped" id='empTable' >
			<thead><tr>
				<th><span onclick='sortTable("username");'>Username</span></th>
				<th ><span onclick='sortTable("phonenum");'>Phone Number</span></th>
                <th><span onclick='sortTable("tgl");'>Date</span></th>
				<th><span onclick='sortTable("start");'>Start</span></th>
				<th><span onclick='sortTable("end");'>End</span></th>
				<th><span onclick='sortTable("duration");'>Duration</span></th>
				<th><span onclick='sortTable("tipe");'>Field</span></th>
				<th>Action</th>
			</tr></thead>
			<?php
			include "dbConnect.php";
			

			if(isset($_POST['vsearch']) && $_POST['vsearch'] == true){ 
				$param = '%'.mysqli_real_escape_string($db_connection, $keyword).'%';
				
				$sql = mysqli_query($db_connection, "SELECT * FROM verifikasi WHERE username LIKE '".$param."' OR tgl LIKE '".$param."' OR tipe LIKE '".$param."' OR phonenum like '".$param."' OR status LIKE '".$param."' order by tgl desc");
				
				$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM verifikasi WHERE username LIKE '".$param."' OR tgl LIKE '".$param."' OR tipe LIKE '".$param."' OR phonenum like '".$param."' OR status LIKE '".$param."' order by tgl desc");
				$get_jumlah = mysqli_fetch_array($sql2);
			}else{ 
				$sql = mysqli_query($db_connection, "SELECT * FROM verifikasi order by tgl desc");
				
				$sql2 = mysqli_query($db_connection, "SELECT COUNT(*) AS jumlah FROM verifikasi");
				$get_jumlah = mysqli_fetch_array($sql2);
			}

			while($data = mysqli_fetch_array($sql)){ 
				?>
					<tbody><tr>
						<td class="align-middle"><?php echo $data['username']; ?></td>
						<td class="align-middle"><?php echo $data['phonenum']; ?></td>
                        <td class="align-middle"><?php echo $data['tgl']; ?></td>
						<td class="align-middle"><?php echo $data['start']; ?>.00</td>
						<td class="align-middle"><?php echo $data['end']; ?>.00</td>
						<td class="align-middle"><?php echo $data['duration']; ?> hour(s)</td>
						<td class="align-middle"><?php echo $data['tipe']; ?></td>
						<td class="align-middle"><a href="responseAccept.php?transnum=<?php echo $data['transnum']; ?>">Accept</a>
                        <a href="responseReject.php?transnum=<?php echo $data['transnum']; ?>">Reject</a></td>
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
                url:'verif_fetch_details.php',
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