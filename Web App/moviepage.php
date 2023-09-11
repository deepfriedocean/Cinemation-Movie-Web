<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_cinemation");
$id_movie = $_GET['id_movie'];
$query = "SELECT * FROM movie WHERE $id_movie = id_movie";
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
    <link rel="stylesheet" href="CSS files/moviepage_style.css" />
    <link rel="stylesheet" href="CSS files/header_style.css" />
    <link rel="stylesheet" href="CSS files/footer_style.css" />
    <link rel="stylesheet" href="CSS files/movieButton_style.css" />
    <link rel="stylesheet" href="CSS files/schedule_style.css" />

    <!-- External JS -->
    <script src="JS files/schedule_button.js"></script>

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />

    <title>Movie</title>
  </head>
  <body>
    <div class="container">
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

      <?php $var = mysqli_fetch_assoc($result)?>
      <div class="main">
        <div class="path-menu">
          <p>Home</p>
          <p>/</p>
          <p>Movie</p>
          <p>/</p>
          <p id="judul_kecil"><?=$var['judul']?></p>
        </div>

        <div class="movie-section">
          <img class="poster" src="movie card/<?php echo $var['poster'] ?>" alt="" />

          <div class="about-movie">
            <div class="judul_film">
              <h2><?=$var['judul']?></h2>
            </div>

            <div class="category">
              <h5><?=$var['genre']?></h5>
            </div>

            <div class="usia_durasi">
              <div class="rating_usia">
                <img src="Logo/Logo Usia.png" alt="" />
                <p><?=$var['range_umur']?></p>
              </div>

              <div class="durasi_film">
                <img src="Logo/Logo Durasi.png" alt="" />
                <p><?=$var['durasi']?></p>
              </div>
              <div class="clear"></div>
            </div>

            <div class="director">
              <h6>Director</h6>
              <p><?=$var['director']?></p>
            </div>

            <div class="studio">
              <h6>Studio</h6>
              <p><?=$var['studio']?></p>
            </div>

            <div class="synopsis">
              <h6>Synopsis</h6>
              <p>
              <?=$var['synopsis']?>
              </p>
            </div>
          </div>
        </div>

        <div class="button">
          <div class="button1">
            <button>
              <a href="buyticketpage.php?id_movie=<?php echo $id_movie ?>">
                <span class="button_top"> Buy Ticket </span>
              </a>
            </button>
          </div>
          <div class="button2">
            <button>
              <a
                href="<?=$var['trailer']?>"
                target="_blank"
              >
                <span class="button_top"> Watch Trailer </span></a
              >
            </button>
          </div>
          <div class="button3" >
            <button>
              <a class="" onclick="toggleDiv()">
                <span class="button_top"> See Schedule </span>
              </a>
            </button>
          </div>

    <div class="container-schedule" id="container-schedule">
      <div class="schedule-section" id="schedule-section">
        <div class="baris">
          <div class="hari">
            <h4>Senin</h4>
          </div>
          <div class="jam">
            <h3>08 : 30</h3>
          </div>
          <div class="jam">
            <h3>12 : 00</h3>
          </div>
          <div class="jam">
            <h3>14 : 15</h3>
          </div>
          <div class="jam">
            <h3>16 : 20</h3>
          </div>
          <div class="jam">
            <h3>20 : 00</h3>
          </div>
        </div>
        <hr />

        <div class="baris">
          <div class="hari">
            <h4>Selasa</h4>
          </div>
          <div class="jam">
            <h3>08 : 30</h3>
          </div>
          <div class="jam">
            <h3>12 : 00</h3>
          </div>
          <div class="jam">
            <h3>14 : 15</h3>
          </div>
          <div class="jam">
            <h3>16 : 20</h3>
          </div>
          <div class="jam">
            <h3>20 : 00</h3>
          </div>
        </div>
        <hr />

        <div class="baris">
          <div class="hari">
            <h4>Rabu</h4>
          </div>
          <div class="jam">
            <h3>08 : 30</h3>
          </div>
          <div class="jam">
            <h3>12 : 00</h3>
          </div>
          <div class="jam">
            <h3>14 : 15</h3>
          </div>
          <div class="jam">
            <h3>16 : 20</h3>
          </div>
          <div class="jam">
            <h3>20 : 00</h3>
          </div>
        </div>
        <hr />

        <div class="baris">
          <div class="hari">
            <h4>Kamis</h4>
          </div>
          <div class="jam">
            <h3>08 : 30</h3>
          </div>
          <div class="jam">
            <h3>12 : 00</h3>
          </div>
          <div class="jam">
            <h3>14 : 15</h3>
          </div>
          <div class="jam">
            <h3>16 : 20</h3>
          </div>
          <div class="jam">
            <h3>20 : 00</h3>
          </div>
        </div>
        <hr />

        <div class="baris">
          <div class="hari">
            <h4>Jumat</h4>
          </div>
          <div class="jam">
            <h3>08 : 30</h3>
          </div>
          <div class="jam">
            <h3>12 : 00</h3>
          </div>
          <div class="jam">
            <h3>14 : 15</h3>
          </div>
          <div class="jam">
            <h3>16 : 20</h3>
          </div>
          <div class="jam">
            <h3>20 : 00</h3>
          </div>
        </div>
        <hr />

        <div class="baris">
          <div class="hari">
            <h4>Sabtu</h4>
          </div>
          <div class="jam">
            <h3>08 : 30</h3>
          </div>
          <div class="jam">
            <h3>12 : 00</h3>
          </div>
          <div class="jam">
            <h3>14 : 15</h3>
          </div>
          <div class="jam">
            <h3>16 : 20</h3>
          </div>
          <div class="jam">
            <h3>20 : 00</h3>
          </div>
        </div>
        <hr />

        <div class="baris">
          <div class="hari">
            <h4>Minggu</h4>
          </div>
          <div class="jam">
            <h3>08 : 30</h3>
          </div>
          <div class="jam">
            <h3>12 : 00</h3>
          </div>
          <div class="jam">
            <h3>14 : 15</h3>
          </div>
          <div class="jam">
            <h3>16 : 20</h3>
          </div>
          <div class="jam">
            <h3>20 : 00</h3>
          </div>
        </div>
        <hr />
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
    </div>
  </body>
</html>
