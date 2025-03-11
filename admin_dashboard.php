<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['type'] != 'admin') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <h2>Welcome, <?php echo $_SESSION['name']; ?></h2>
    <p>You are logged in as <b>Admin</b>.</p>
    <a href="logout.php">Logout</a>
</body>

</html>