<?php

include "dbConnect.php";

$columnName = $_POST['columnName'];
$sort = $_POST['sort'];

$select_query = "select tgl, username, phonenum, start, end, duration, tipe, status from booking inner join customer on customer.id=booking.id
inner join field on field.fieldnum=booking.id order by ".$columnName." ".$sort." ";

$result = mysqli_query($db_connection,$select_query);

$html = '';
while($data = mysqli_fetch_array($result)){ 
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