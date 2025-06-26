<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>

    <!-- SWIPER CSS LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS FILE LINK -->
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <!-- START OF THE HEADER SECTION -->

    <section class="header">
        <a href="home.php" class="logo">Traveler's Trails</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="login.php">book</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- END OF THE HEADER SECTION -->
    <div class="heading" style="background:url(Pics/pic7.jpg) no-repeat">
        <h1>book now</h1>
    </div>
<?php
$dsn = 'mysql:host=localhost:3306;dbname=book_db';
$username = 'root';
$password = '';

try {
    $connection = new PDO($dsn, $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $connection->prepare("SELECT * FROM book_form");
    $stmt->execute();
    $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$bookings = isset($bookings) ? $bookings : [];
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            width: 80%;
            margin: 0 auto; /* Center the container */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            border: 3px double black;
            border-radius: 8px; /* Add border radius */
            height: 400px; /* Increase the height here */
            font-size: 16px; /* Increase the font size here */
            margin-bottom:10rem;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Set specific width for the email column */
        th:nth-child(2),
        td:nth-child(2) {
            width: 260px;
        }

        /* Add border for each column */
        th:first-child,
        td:first-child {
            border-left: 1px solid #ddd;
        }

        th:last-child,
        td:last-child {
            border-right: 1px solid #ddd;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }
        .title{
                text-align: center;
                font-size:50px;
                padding:30px
        }
    </style>
</head>
<body>
   <div class="container"> <h1 class="title">Booking Details</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Location</th>
            <th>Guests</th>
            <th>Arrivals</th>
            <th>Leaving</th>
        </tr>

        <?php foreach ($bookings as $booking): ?>
        <tr>
            <td><?php echo $booking['name']; ?></td>
            <td><?php echo $booking['email']; ?></td>
            <td><?php echo $booking['phone']; ?></td>
            <td><?php echo $booking['address']; ?></td>
            <td><?php echo $booking['location']; ?></td>
            <td><?php echo $booking['guests']; ?></td>
            <td><?php echo $booking['arrivals']; ?></td>
            <td><?php echo $booking['leaving']; ?></td>
            
        </tr>
        <?php endforeach; ?>

    </table>

    </div>
   


        <!-- START OF FOOTER SECTION -->

        <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
                <a href="privacy.php"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="term.php"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+923123935648 "><i class="fas fa-phone "></i>+923123935648</a>
                <a href="tel:+923126759748"><i class="fas fa-phone "></i>+923126759748</a>
                <a href="#"><i class="fas fa-envelope"></i>travelerstrail@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>faisalabad, pakistan</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fa-brands fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fa-brands fa-twitter"></i>twitter</a>
                <a href="#"><i class="fa-brands fa-instagram"></i>instagram</a>
                <a href="#"><i class="fa-brands fa-linkedin"></i>linkedin</a>
            </div>

        </div>
        <div class="credit">created by
            <span>UMAR HANZALA AND MEHBOOB</span>|all rights reserved!</div>
    </section>

    <!-- END OF FOOTER SECTION -->












    <!-- SWIPER JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- JS FILE LINK -->
    <script src="script.js"></script>
</body>

</hphp