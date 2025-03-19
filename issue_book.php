<?php
include './database.php';

$user_id =$_POST['user_id'];
$book_id = $_POST['book_id'];
$issue_date = $_POST['issue_date'];
$return_date = $_POST['return_date'];
$status= $_POST['status'];

$sql = "INSERT INTO transactions (user_id, book_id, issue_date, return_date, status) 
        VALUES (1, $user_id,$book_id, '$issue_date', '$return_date', 'issued')";
if ($conn->query($sql) === TRUE) {
    echo 'Book issued successfully.';
} else {
    echo 'Error: ' . $conn->error;
}
