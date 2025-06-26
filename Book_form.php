<?php
$dsn = 'mysql:host=localhost:3306;dbname=book_db';
$username = 'root';
$password = '';
$submitted = false;

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $stmt = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $address, $location, $guests, $arrivals, $leaving]);

        $submitted = true;
        $message = "Booking Successfull!";
        echo "<script>
            alert('$message');
            window.location.href = 'book.php';
        </script>";
    } else {
        echo 'Something went wrong, please try again.';
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
