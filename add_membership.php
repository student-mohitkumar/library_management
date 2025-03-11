<?php
include './database.php';

$user_name = $_POST['user_name'];
$type = $_POST['membership_type'];

$sql = "INSERT INTO membership (user_id, type, status) 
        VALUES (1, '$type', 'active')";
if ($conn->query($sql) === TRUE) {
    echo 'Membership added successfully.';
} else {
    echo 'Error: ' . $conn->error;
}
