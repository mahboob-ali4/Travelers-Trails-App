<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

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
            <!-- <a href="book.php">book</a> -->
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- END OF THE HEADER SECTION -->

    <div class="heading" style="background:url(Pics/pic7.jpg) no-repeat">
        <h1>book now</h1>
    </div>

    <!-- booking section starts -->
    <section class="booking">
        <h1 class="heading-title">
            Book your trip!
        </h1>
        <form action="Book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>
                        Name :
                    </span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>
                        Email :
                    </span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>
                        Phone :
                    </span>
                    <input type="number" placeholder="Enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>
                        Address :
                    </span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>
                        Where to :
                    </span>
                    <input type="text" placeholder="Place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>
                        How many :
                    </span>
                    <input type="number" placeholder="Number of passengers" name="guests">
                </div>
                <div class="inputBox">
                    <span>
                        Arrivals :
                    </span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>
                        Leaving :
                    </span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" class="btn" value="submit" name="send">
           
            <a href="display.php"><input type="button" value="Show bookings" class="btn" style="float:right"></a>

        </form>
</section>
    <!-- booking section ends -->


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