<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <!-- SWIPER CSS LINK -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS FILE LINK -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <!-- home section starts -->
    <section class="home" id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1800">
      <img src="Pics/pic8.jpg" height="520px"  class="d-block w-100"  alt="..." >
      <div class="carousel-caption d-none d-md-block text">
        <h1>Explore,Discover,travel</h1>
        <p><strong><h3>"The world is a book, and those who do not travel read only one page."</h3></strong></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="1800">
      <img src="Pics/pic9.jpg" height="520px" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block text">
        <h1>Explore,Discover,travel</h1>
        <p><strong><h3>"Travel is fatal to prejudice, bigotry, and narrow-mindedness."</h3></strong></p>
      </div>
    </div>
    <div class="carousel-item"  data-bs-interval="1800">
      <img src="Pics/pic2.jpg"height="520px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block text">
        <h1>Explore,Discover,travel</h1>
        <p><strong><h3>"Travel is the only thing you can buy that makes you richer."</h3></strong></p>
      </div>
    </div>
  </div>
    </section>
    <!-- home section ends -->

    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="Spics/adventure.jpeg" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="Spics/tourguide.jpeg" alt="">
                <h3>Tour guide</h3>
            </div>
            <div class="box">
                <img src="Spics/trekking.jpeg" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="Spics/campfire.jpeg" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="Spics/offroad.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="Spics/camping.jpeg" alt="">
                <h3>camping</h3>
            </div>

        </div>
    </section>
    <!-- services section ends-->

    <!-- home about section starts -->
    <section class="home-about">
        <div class="image">
            <img src="Pics/pic10.jpg" alt="" height="654px">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p> Explore the world with our Site. We are passionate about curating unique travel experiences that leave a lasting impression. From exotic destinations to personalized itineraries, we're here to make your travel dreams a reality.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- home about section ends -->
    <!-- home pakages section starts -->
    <section class="home-packages">
        <h1 class="heading-title">our pakages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="Pics/pic5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pakistan,Islamabad</h3>
                    <p>"The Faisal Mosque is a sacred space, where hearts are lifted, souls find peace, and prayers find their wings."</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="Pics/pic3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Japan,Heroshima</h3>
                    <p>"Hiroshima is a city of resilience and peace, where the scars of history serve as a reminder of the importance of harmony and forgiveness."</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="Pics/pic6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Turkey,Istanbol</h3>
                    <p>"Istanbul is a bridge between continents, a fusion of cultures, and a treasure trove of history that leaves an indelible mark on every visitor's soul."</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more">
            <a href="package.php" class="btn">load more</a>
        </div>
    </section>
    <!-- home pakages section ends -->
    <!-- home offer section starts -->
    <section class="home-offer">
        <div class="content">
            <h3>
                Upto 15% OFF
            </h3>
            <p>✈️ Explore the World with 15% OFF! ✈️<br>

🌍 Unleash your wanderlust with our irresistible offer! 🌍<br>

"Are you ready for your next adventure? We're thrilled to present you with an exclusive discount of 15% on all bookings made through our travel website." <br>

✨ How to claim your discount: <br>
1️⃣ Visit our website at [https://travelerstrail.com].<br>
2️⃣ Browse our vast collection of packages and choose.<br>
3️⃣ Select your travel package and proceed to booking.<br>
4️⃣ Enter the promo code  during the checkout process.<br>
5️⃣ Watch in awe as your total price magically reduces by 15%!</p>
            <a href="book.php" class="btn">Book now</a>
        </div>
    </section>
    <!-- home offer section ends -->
    <!-- START OF FOOTER SECTION -->

    <section class=" footer ">
        <div class="box-container ">
            <div class="box ">
                <h3>quick links</h3>
                <a href="home.php "><i class="fas fa-angle-right "></i>home</a>
                <a href="about.php "><i class="fas fa-angle-right "></i>about</a>
                <a href="package.php "><i class="fas fa-angle-right "></i>package</a>
                <a href="book.php "><i class="fas fa-angle-right "></i>book</a>
            </div>

            <div class="box ">
                <h3>extra links</h3>
                <a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
                <a href="privacy.php"><i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="term.php"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box ">
                <h3>contact info</h3>
                <a href="tel:+923123935648 "><i class="fas fa-phone "></i>+923123935648</a>
                <a href="tel:+923126759748"><i class="fas fa-phone "></i>+923126759748</a>
                <a href="# "><i class="fas fa-envelope "></i>travelerstrail@gmail.com</a>
                <a href="# "><i class="fas fa-map "></i>faisalabad, pakistan</a>
            </div>

            <div class="box ">
                <h3>follow us</h3>
                <a href="# "><i class="fa-brands fa-facebook-f "></i>facebook</a>
                <a href="# "><i class="fa-brands fa-twitter "></i>twitter</a>
                <a href="# "><i class="fa-brands fa-instagram "></i>instagram</a>
                <a href="# "><i class="fa-brands fa-linkedin "></i>linkedin</a>
            </div>

        </div>
        <div class="credit ">created by
            <span>UMAR HANZALA AND MEHBOOB</span>|all rights reserved!</div>
    </section>

    <!-- END OF FOOTER SECTION -->












    <!-- SWIPER JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js "></script>
    <!-- JS FILE LINK -->
    <script src="script.js "></script>
</body>

</html>