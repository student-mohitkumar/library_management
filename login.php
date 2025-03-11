<?php
// include './database.php';

// $email = $_POST['email'];
// $password = $_POST['password'];

// $sql = "SELECT * FROM users WHERE email='$email'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
  
          
//     if (password_verify($password, $row['password'])) {
//         if ($row['role'] == 'admin') {
//             header('Location: ./admin_dashboard.php');
//         } else {
//             header('Location: ./user_dashboard.php');
//         }
//     } else {
//         echo 'Incorrect password.';
//     }
// } else {
//     echo 'User not found.';
// }

include './database.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email) || empty($password)) {
    die('Email and password are required.');
}

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  
    if ($password=== $row['password']) {
        echo 'login succesfull';
        session_start();
        $_SESSION['email']= $row['email'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['name'] =$row['name'];
        if ($row['role'] == 'admin') {
            header('Location: ./admin_dashboard.php');
        } else {
            header('Location: ./user_dashboard.php');
        }
        exit();
    } else {
        echo 'Incorrect password.';
    }
} else {
    echo 'User not found.';
}

$stmt->close();
$conn->close();
?>
