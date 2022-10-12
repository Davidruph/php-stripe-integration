<?php
require 'dbconn.php';
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $sql = mysqli_query($conn, "INSERT INTO subscribers (email) VALUES ('$email')");
    if ($sql) {
        echo "Saved";
    }else{
        echo "Error";
    }
}
?>