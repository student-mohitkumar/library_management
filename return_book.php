<?php
include './database.php';

$book_name = $_POST['book_name'];
$serial_no = $_POST['serial_no'];

$sql = "UPDATE transactions SET status='returned' WHERE id=$serial_no";
if ($conn->query($sql) === TRUE) {
    echo 'Book returned successfully.';
} else {
    echo 'Error: ' . $conn->error;
}
