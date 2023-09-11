<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_cinemation");
$id_promo = $_GET['id_promo'];
$query = "SELECT * FROM promo WHERE $id_promo = id_promo";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Website icon-->
    <link rel="Website Icon" type="png" href="Logo/Logo Cinemation .png" />

    <!-- External CSS -->
    <link rel="stylesheet" href="CSS files/css_reset.css" />
    <link rel="stylesheet" href="CSS files/fontfamily.css" />
    <link rel="stylesheet" href="CSS files/header_style.css" />
    <link rel="stylesheet" href="CSS files/footer_style.css" />
    <link rel="stylesheet" href="CSS files/viewpromopage_style.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />
    <title>View Promo</title>
  </head>
  <body>
    <div class="header">
      <div class="navigasi">
        <ul>
          <li><a href="homepage.php">Home</a></li>
          <li><a href="homepage.php">Now Playing</a></li>
          <li><a href="upcomingpage.php">Upcoming</a></li>
          <li><a href="promospage.php">Promos</a></li>
        </ul>
      </div>
      <div class="logo">
        <img src="Logo/Logo Cinemation .png" alt="Logo cinemation" />
      </div>
      <div class="tombol">
        <?php if (isset($_SESSION['username'])): ?>
          <div class="logout">
          <h3 class="username"><?php echo $_SESSION['username']; ?></h3>
          <a href="logout.php"><button class="sign-up">logout</button></a>
          </div>
        <?php else: ?>
          <a href="loginpage.php"><button class="login">Login</button></a>
          <a href="signuppage.php"><button class="sign-up">Sign up</button></a>
        <?php endif;?>
      </div>
    </div>

    <div class="container">
      <div class="main">
        <?php $var = mysqli_fetch_assoc($result)?>
        <div class="judul-promo"><h1><?=$var['judul']?></h1></div>
        <div class="image">
          <div class="tanggal-section">
          <p><span><?=$var['tanggal_mulai']?></span>
          sampai dengan
          <span><?=$var['tanggal_berakhir']?></span>
          </p>
          </div>
          <img src="Poster Promo/<?php echo $var['poster'] ?>" alt="" />
        </div>
        <div class="tulisan">
          <div class="tentang-promo">
            <h3><?=$var['subjudul']?></h3>
            <p>
            <?=$var['deskripsi']?>
            </p>
          </div>
          <div class="syarat-ketentuan">
            <h3>Syarat dan Ketentuan</h3>
            <p>
            <?=$var['syarat_ketentuan']?>
            </p>
          </div>
          <div class="cara-menggunakan">
            <h3>Cara menggunakan Kupon Promo</h3>
            <p><?=$var['cara_menggunakan']?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="footer_menu">
        <ul>
          <li>
            <a href="aboutUspage.php"><p>About Us</p></a>
          </li>
          <li>
            <a href="transactionhistory.php"><p>Transaction History</p></a>
          </li>
          <li>
            <a href="contactUspage.php"><p>Contact Us</p></a>
          </li>
        </ul>
      </div>
      <div class="footer_logo">
        <img src="Logo/Logo Cinemation (Stroke).png" alt="Logo Cinemation" />
      </div>

      <div class="footer_information">
        <p>
        © Cinemation 2023. All rights reserved.
        Experience the magic of movies at Cinemation
        - your ultimate destination for cinematic entertainment.
        </p>
        <div class="social_media">
          <img src="Logo/Logo Ig.png" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>
