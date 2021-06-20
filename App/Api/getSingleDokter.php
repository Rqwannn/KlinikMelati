<?php

include "../Koneksi.php";

$Keahlian = $_GET["Keahlian"];

$query = mysqli_query($conn, "SELECT * FROM dokter");

$result = [];

foreach ($query as $item) {
    if ($item["keahlian"] == $Keahlian) {
        $result[] = $item;
    }
}

echo json_encode($result);
