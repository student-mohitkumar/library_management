<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['role'] != 'user') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>

<body>
    <h2>Welcome, <?php echo $_SESSION['name']; ?></h2>
    <p>You are logged in as <b>User</b>.</p>
    <a href="logout.php">Logout</a>
     <br>
     <h2>Add Book</h2>
                <form action="add_book.php" method="POST">
                    <input type="text" name="title" placeholder="Book Title" required><br>
                    <input type="text" name="author" placeholder="Author Name" required><br>
                    <input type="number" name="quantity" placeholder="Quantity" required><br>
                    <button type="submit">Add Book</button>
                </form>
                
                <h2>Issue Book</h2>
                <form action="issue_book.php" method="POST">
                    <input type="text" name="book_name" placeholder="Book Name" required><br>
                    <input type="text" name="author_name" placeholder="Author Name" readonly><br>
                    <input type="date" name="issue_date" required><br>
                    <input type="date" name="return_date" required><br>
                    <button type="submit">Issue Book</button>
                </form>
                
                <h2>Return Book</h2>
                <form action="return_book.php" method="POST">
                    <input type="text" name="book_name" placeholder="Book Name" required><br>
                    <input type="text" name="author_name" placeholder="Author Name" readonly><br>
                    <input type="text" name="serial_no" placeholder="Serial No" required><br>
                    <button type="submit">Return Book</button>
                </form>
                
                <h2>Pay Fine</h2>
                <form action="fine.php" method="POST">
                    <input type="text" name="book_name" placeholder="Book Name" required><br>
                    <input type="text" name="fine_amount" placeholder="Fine Amount" readonly><br>
                    <input type="checkbox" name="fine_paid"> Fine Paid<br>
                    <button type="submit">Pay Fine</button>
                </form>
                
                <h2>Add Membership</h2>
                <form action="add_membership.php" method="POST">
                    <input type="text" name="user_name" placeholder="User Name" required><br>
                    <select name="membership_type">
                        <option value="6 Months">6 Months</option>
                        <option value="1 Year">1 Year</option>
                        <option value="2 Years">2 Years</option>
                    </select><br>
                    <button type="submit">Add Membership</button>
                </form>
</body>

</html>