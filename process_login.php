<?php
$dsn = 'mysql:host=localhost:3306;dbname=book_db';
$username = 'root';
$password = '';

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        echo "Login Successful!";
        // Redirect to book.php
        header("Location: book.php");
        exit;
    } else {
        $message = "Invalid username or password.";
        echo "<script>
            alert('$message');
            window.location.href = 'login.php';
        </script>";
    }
} catch (PDOException $e) {
    echo 'Login failed: ' . $e->getMessage();
}
?>
