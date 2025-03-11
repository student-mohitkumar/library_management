<?php
include './database.php';

$title = $_POST['title'];
$author = $_POST['author'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO books (title, author, genre, availability) VALUES ('$title', '$author', 'Unknown', $quantity)";
if ($conn->query($sql) === TRUE) {
    echo 'Book added successfully.';
} else {
    echo 'Error: ' . $conn->error;
}
