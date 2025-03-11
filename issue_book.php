<?php
include './database.php';

$book_name = $_POST['book_name'];
$issue_date = $_POST['issue_date'];
$return_date = $_POST['return_date'];

$sql = "INSERT INTO transactions (user_id, book_id, issue_date, return_date, status) 
        VALUES (1, 1, '$issue_date', '$return_date', 'issued')";
if ($conn->query($sql) === TRUE) {
    echo 'Book issued successfully.';
} else {
    echo 'Error: ' . $conn->error;
}
