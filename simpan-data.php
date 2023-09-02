<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "wander_t1";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $jumlah = $_POST["jumlah"];
    $ucapan = $_POST["ucapan"];

    $sql = "INSERT INTO tbl_wishes (name, jumlah, ucapan) VALUES ('$name', '$jumlah', '$ucapan')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
