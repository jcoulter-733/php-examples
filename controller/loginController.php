<?php
include ROOT_DIR . 'database/config.php';

session_start();

if (empty($_POST['email']) || empty($_POST['password'])) {
    $_SESSION['status_message'] = 'Please fill both the email and password fields!';
    header('Location: ../pages/login.php');
    exit();
}

// Prepare an SQL statement to prevent SQL injection when checking user credentials
if ($stmt = $conn->prepare('SELECT user_id, password_hash, role FROM users WHERE email = ?')) {
    // Bind the email parameter from the POST data and execute the statement
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->store_result();
    

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $role);
        $stmt->fetch();
        
        // Verify the entered password against the hashed password stored in the database
        if (password_verify($_POST['password'], $password)) {
            // Password is correct, regenerate session ID for security
            session_regenerate_id();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['user_id'] = $id;
            $_SESSION['role'] = $role;

            // Set a secure cookie with the email (adjust Secure flag based on environment)
            setcookie("email", $_POST['email'], time() + 86400, "/", "", true, true);

            // Redirect user based on their role
            if ($role == 'admin') {
                header('Location: ../pages/admin/dashboard.php');
            } else {
                header('Location: ../pages/user/dashboard.php');
            }
            exit();
        } else {
            // If password is incorrect, set an error message and redirect back to login page
            $_SESSION['status_message'] = 'Incorrect email or password!';
            header('Location: ../pages/login.php');
            exit();
        }
    } else {
        // If email does not exist, set an error message and redirect to login page
        $_SESSION['status_message'] = 'Incorrect email or password!';
        header('Location: ../pages/login.php');
        exit();
    }
    
    // Close the prepared statement
    $stmt->close();
} else {
    // If preparing the SQL statement fails, set an error message and redirect
    $_SESSION['status_message'] = 'Login system error. Please try again later.';
    header('Location: ../pages/login.php');
    exit();
}
?>
