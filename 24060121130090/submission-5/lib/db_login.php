<?php 
// Nama File : db_login.php
// Deskripsi : Membuat koneksi ke database
// Nama      : Dorino Baharson
// Tanggal   : 3 Oktober 2023
// NIM       :24060121130090
$db_host = 'localhost';
$db_database = 'bookorama';
$db_username = 'root';
$db_password = '';

//  Connect database
$db = new mysqli($db_host, $db_username, $db_password, $db_database);
if ($db->connect_errno) {
    die('Could not connect to the database: <br/>' . $db->connect_error);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>