<?php
session_start();
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
    <link rel="stylesheet" href="CSS files/aboutUspage_style.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />

    <title>About Us</title>
  </head>
  <body>
    <div class="header">
      <div class="navigasi">
        <ul>
          <li><a href="homepage.php">Home</a></li>
          <li><a href="#now_playing_movie">Now Playing</a></li>
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

    <div class="main">
      <div class="container">
        <div class="page-path">
          <p>About Us</p>
        </div>
        <img src="Image/pexels-bence-szemerey-7081182.jpg" alt="" />
        <div class="paragraph">
          <p>
          Bioskop Cinemation adalah sebuah bioskop yang menawarkan pengalaman menonton film yang menyenangkan dan berkualitas.
          Bioskop ini menyajikan berbagai film terbaru dari berbagai genre, mulai dari film aksi, petualangan, komedi, drama, hingga film animasi.
          Cinemation memiliki beberapa studio yang dilengkapi dengan teknologi canggih, seperti layar lebar dan sistem suara yang memukau, untuk memberikan
          pengalaman menonton yang maksimal kepada para penonton.
          </p>
          <br>
          <p>
          Selain itu, Cinemation juga memberikan layanan tambahan, seperti penjualan tiket secara online melalui website mereka.
          Hal ini memudahkan penonton untuk memilih film yang ingin ditonton, melihat jadwal penayangan, dan membeli tiket tanpa harus datang ke bioskop secara langsung.
          </p>
          <br>
          <p>
          Bioskop Cinemation juga sering mengadakan acara khusus, seperti premier film, penayangan film-film klasik, atau acara bertema yang berkaitan dengan dunia perfilman.
          Mereka juga menjalin kerjasama dengan pihak-pihak terkait, seperti produser film dan distributor, untuk memberikan pengalaman menonton yang beragam dan memuaskan bagi penonton mereka.
          </p>
          <br>
          <p>Dengan suasana yang nyaman dan pelayanan yang baik, Cinemation menjadi salah satu destinasi favorit bagi pecinta film untuk menikmati film-film terbaru dengan kualitas yang terbaik.</p>
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
