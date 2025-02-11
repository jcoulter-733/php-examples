<?php
include '../database/config.php';
session_start();

// Input sanitization, taking away any spaces
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
//$created_at = trim($_POST['created_at']);
//$role = trim($_POST['role']);

// Validate username characters
if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
  $_SESSION['status_message'] = 'Username can only contain letters and numbers';
  header('Location: ../pages/register.php');
  exit();
}

// Validate password length
if(strlen($password) < 5 || strlen($password) > 20) {
  $_SESSION['status_message'] = 'Password must be between 5 and 20 characters';
  header('Location: ../pages/register.php');
  exit();
}

// Validate email (basic validation, can be expanded)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['status_message'] = 'Invalid email format!';
    header('Location: register');
    exit();
}

$stmt = $conn->prepare("SELECT user_id FROM users WHERE email = ?");
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
  $_SESSION['status_message'] = 'Email already exists';
  header('Location: ../pages/register.php');
  exit();
} else {
    $stmt-> close();

    // Email doesn't exist. create new account
    $stmt = $conn->prepare("INSERT INTO users (username, email, password_hash, created_at, role) VALUES (?, ?, ?, NOW(), user)");

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Bind parameters and execute query 
    if($stmt){
        $stmt->bind_param("sss", $username, $email, $hashed_password);
        $stmt->execute();

        // If account creation successful
        if($stmt->affected_rows > 0){
            $_SESSION['status_message'] = 'Account created successfully, Please login';
            header('Location: ../pages/login.php');           
        } else {
            $_SESSION['status_message'] = 'Error creating account';
            header('Location: ../pages/register.php');            
        }
        $stmt->close();
    } else {
        $_SESSION['status_message'] = 'Database error';
        header('Location: ../pages/register.php');
    }

    $conn->close();
    exit();

}
?>