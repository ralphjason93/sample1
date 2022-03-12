<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="header">
    <a href="home.php" class="logo">travel.</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background: url(images/header-bg-3.png) no-repeat;">
    <h1>book now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" name="name" placeholder="enter your name" required>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" name="email" placeholder="enter your email" required>
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" name="phone" placeholder="enter your number" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" name="address" placeholder="enter your address" required>
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" name="location" placeholder="place you want to visit" required>
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" name="guests" placeholder="number of guests" required>
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving" required>
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="submit">
    </form>
</section>



<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>home</a>
        </div>
        <div class="box"> 
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>faq</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box"> 
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-angle-right"></i>+123-456-7890</a>
            <a href="#"><i class="fas fa-angle-right"></i>+111-222-3333</a>
            <a href="#"><i class="fas fa-angle-right"></i>sralphjason93@gmail.com</a>
            <a href="#"><i class="fas fa-angle-right"></i>Manila, Philippines - 1008</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"><i class="fab fa-twitter"></i> twitter </a>
            <a href="#"><i class="fab fa-instagram"></i> instagram </a>
            <a href="#"><i class="fab fa-linkedin"></i> linkedin </a>

        </div>
    </div>
    <div class="credit"> created by <span>Ralhp Jason Labagnoy</span> | all rights reserved! </div>


</section>











<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="javascript/script.js"></script>

</body>


</html>