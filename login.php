<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<!-- FONT AWESOME CDN LINK -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- CSS FILE LINK -->
<link rel="stylesheet" href="style.css">
<!-- bootstrap link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<!-- header section -->
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

<!-- header section ends -->

<div class="heading" style="background:url(Pics/pic7.jpg) no-repeat">
        <h1>SIGN IN</h1>
    </div>
    <h1 class="heading-title" style="margin:6rem">
            Login here
        </h1>
        <body style="background-color: #f2f2f2;">
    <div style="display: flex; justify-content: center; align-items: center; height: 50vh;">
        <div style="margin-bottom:10rem ;font-size:15px;width: 500px; padding: 20px; background-color: #fff; border-radius: 8px;">
            <form action="process_login.php" method="POST">
                <label for="username" style="display: block; margin-bottom: 10px;">Username:</label>
                <input type="text" name="username" id="username" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

                <label for="password" style="display: block; margin-top: 10px; margin-bottom: 10px;">Password:</label>
                <input type="password" name="password" id="password" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">

                <input type="submit" value="Login" style="display: block; width: 100%; padding: 10px; margin-top: 10px; background-color:#039af7; color: #fff; border: none; border-radius: 4px; cursor: pointer;" onmouseover="this.style.backgroundColor='#000';" onmouseout="this.style.backgroundColor='#039af7';">                <a href="register.php" style="display: block; text-align: center; margin-top: 10px; text-decoration: none; color: #000;">Not registered yet?</a>
            </form>
        </div>
    </div>
</body>
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

</html>
