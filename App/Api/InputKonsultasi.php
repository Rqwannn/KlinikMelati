<?php

include "../Koneksi.php";

$Dokter = $_POST["Dokter"];
$Email = $_POST["Email"];
$Nama = $_POST["Nama"];
$Tanggal = $_POST["Tanggal"];
$Gender = $_POST["Gender"];
$Umur = $_POST["Umur"];

$query = mysqli_query($conn, "INSERT INTO perjanjian VALUE('', '$Nama', '$Email', '$Dokter', '$Umur', '$Gender', null, '$Tanggal')");

$result = [];

$result["Nama"] = $Nama;

echo json_encode($result);
