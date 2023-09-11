<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    $conn = mysqli_connect("localhost", "root", "", "db_cinemation");
    $id_customer = $_SESSION['id_customer'];

    $query = "SELECT movie.judul, movie.genre, movie.poster, transaksi.kupon, transaksi.tgl_transaksi, transaksi.kartu_kredit FROM transaksi JOIN movie ON transaksi.id_movie = movie.id_movie WHERE transaksi.id_customer = $id_customer";
    
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
    <link rel="stylesheet" href="CSS files/transactionhistory_style.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />

    <title>Transaction History</title>
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
        <div class="page-path">
          <h5>Transaction History</h5>
        </div>
        <div class="active-list">
          <h3>List</h3>
          <hr />

          <?php while ($card = mysqli_fetch_assoc($result)): ?>
          <div class="card">
            <div class="left">
              <img src="movie card/<?php echo $card['poster'] ?>" alt="" />
            </div>
            <div class="right">
              <div class="information">
                <div class="bagian-atas">
                  <h1><?=$card['judul'];?></h1>
                  <h2><?=$card['genre'];?></h2>
                  <h2><?=$card['tgl_transaksi'];?></h2>
                </div>

                <div class="bagian-bawah">
                  <div class="kiri">
                    <h2><span class="kupon"><?=$card['kupon'];?></span></h2>
                    <h2>1 Ticket</h2>
                    <h2>IDR 30.000</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

<?php
} else {
    echo "
<script>

alert('Anda harus login terlebih dahulu untuk melihat halaman ini!');
document.location.href = 'homepage.php';

</script>"
;
}
?>