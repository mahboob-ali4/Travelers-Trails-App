<?php
$dsn = 'mysql:host=localhost:3306;dbname=book_db';
$username = 'root';
$password = '';

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Check if password and confirm password match
    if ($password !== $confirmPassword) {
        echo "Password and Confirm Password do not match.";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $connection->prepare("INSERT INTO users (username, contact, email, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$username, $contact, $email, $hashedPassword]);

    echo "Registration Successful!";

    // Redirect to login page
    header("Location: login.php");
    exit;
} catch (PDOException $e) {
    echo 'Registration failed: ' . $e->getMessage();
}
?>
