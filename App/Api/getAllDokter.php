<?php

include "../Koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM dokter");

$result = [];

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

echo json_encode($result);
