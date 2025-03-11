<?php
include './database.php';

$book_name = $_POST['book_name'];
$fine_amount = $_POST['fine_amount'];

$sql = "UPDATE fine_payments SET fine_paid=$fine_amount, status='paid' WHERE book_name='$book_name'";
if ($conn->query($sql) === TRUE) {
    echo 'Fine paid successfully.';
} else {
    echo 'Error: ' . $conn->error;
}
