<?php

include "../Koneksi.php";

$obat = $_GET["obat"];

$query = mysqli_query($conn, "SELECT * FROM obat WHERE nama_obat LIKE '%$obat%'");

$result = [];

foreach ($query as $item) {
    $result[] = $item;
}

echo json_encode($result);