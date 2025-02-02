<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "admin";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if ($koneksi->connect_error) {
  echo "koneksi database rusak";
  die("error!");
}

echo "koneksi berhasil";
?>