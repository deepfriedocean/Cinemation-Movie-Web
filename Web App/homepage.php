<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_cinemation");
$query = "SELECT * FROM movie WHERE kategori = 'Now Playing Movie'";
$result = mysqli_query($conn, $query);

// $id_promo = $_GET['id_promo'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Website icon-->
    <link rel="Website Icon" type="png" href="Logo/Logo Cinemation .png" />

    <!-- External Css -->
    <link rel="stylesheet" href="CSS files/css_reset.css" />
    <link rel="stylesheet" href="CSS files/fontfamily.css" />
    <link rel="stylesheet" href="CSS files/homepage_style.css" />
    <link rel="stylesheet" href="CSS files/slider_style.css" />
    <link rel="stylesheet" href="CSS files/header_style.css" />
    <link rel="stylesheet" href="CSS files/footer_style.css" />

    <!-- External JS -->
    <script src="JS files/looping_slider.js"></script>

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />

    <title>Cinemation</title>
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
      <div class="ads">
        <!-- image slider start -->
        <div class="slider">
          <div class="slides">
            <!-- radio button start -->
            <input type="radio" name="radio-btn" id="radio1" />
            <input type="radio" name="radio-btn" id="radio2" />
            <input type="radio" name="radio-btn" id="radio3" />
            <input type="radio" name="radio-btn" id="radio4" />
            <!-- radio button end -->

            <!-- slide images start -->
            <div class="slide first" id="slide_satu">
              <a href=""><img src="Image/ceritanya_iklan.png" alt="" href="viewpromopage?id_promo=<?php echo $poster; ?>"/></a>
            </div>
            <div class="slide" id="slide_dua">
              <a href=""><img src="Image/ceritanya_iklan.png" alt="" /></a>
            </div>
            <div class="slide" id="slide_tiga">
              <a href=""><img src="Image/ceritanya_iklan.png" alt="" /></a>
            </div>
            <div class="slide" id="slide_empat">
              <a href=""><img src="Image/ceritanya_iklan.png" alt="" /></a>
            </div>
            <!-- slide images end -->

            <!-- automatic navigation start -->
            <div class="navigation-auto">
              <div class="auto-btn1"></div>
              <div class="auto-btn2"></div>
              <div class="auto-btn3"></div>
              <div class="auto-btn4"></div>
            </div>
            <!-- automatic navigation end -->
          </div>

          <!-- manual navigation start -->
          <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
          </div>
          <!-- manual navigation end -->
        </div>
        <!-- image slider end -->
      </div>

      <div class="movie" id="now_playing_movie">
        <div class="movie-tulisan">
          <p>Home</p>
          <h2>Movies</h2>
          <p class="text_singkat">
            Pilih film favorit anda dan tonton di bioskop favorit anda!
          </p>
        </div>
        <div class="movie-list">

        <?php while ($card = mysqli_fetch_assoc($result)): ?>
        <?php $id_movie = $card['id_movie'];?>
        <a href="moviepage.php?id_movie=<?php echo $id_movie; ?>">
          <img src="movie card/<?php echo $card['poster'] ?>" alt="movie poster"/>
        </a>
        <?php endwhile;?>
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
