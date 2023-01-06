<?php
require('./db.php');
// Environment Informations
$siteurl = "http://localhost/college";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $text = $_POST['contact_message'];


    $sql = "INSERT INTO contacts (full_name, phone, contact_message) VALUES ('$full_name', '$phone', '$text')";

    if ($conn->query($sql) === TRUE) {
        echo "Data Adeed";
        header("Location: $siteurl");

    } else {
        echo "Error Happend : " . $conn->error;
    }

} else {
    header("Location: $siteurl");
}


?>