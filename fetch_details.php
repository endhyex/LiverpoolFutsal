<?php

include "dbConnect.php";

$columnName = $_POST['columnName'];
$sort = $_POST['sort'];

$select_query = "select tgl, username, phonenum, start, end, duration, tipe, status from booking inner join customer on customer.id=booking.id
inner join field on field.fieldnum=booking.id order by ".$columnName." ".$sort." ";

$result = mysqli_query($db_connection,$select_query);

$html = '';
while($row = mysqli_fetch_array($result)){
    $tgl = $row['tgl'];
    $username = $row['username'];
    $phonenum = $row['phonenum'];
    $start = $row['start'];
    $end = $row['end'];
    $duration = $row['duration'];
    $tipe = $row['tipe'];
    $status = $row['status'];

    $html .= "<tr>
    <td>".$tgl."</td>
    <td>".$username."</td>
    <td>".$phonenum."</td>
    <td>".$start."</td>
    <td>".$end."</td>
    <td>".$duration."</td>
    <td>".$tipe."</td>
    <td>".$status."</td>
    </tr>";
}

echo $html;