<?php
session_start();
  
require 'functions.php';
$query = "SELECT * FROM message";
$result = mysqli_query($connection, $query);

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
    <link rel="stylesheet" href="CSS Files/css_reset.css" />
    <link rel="stylesheet" href="CSS Files/fontfamily.css" />
    <link rel="stylesheet" href="CSS Files/sidebar_style.css" />
    <link rel="stylesheet" href="CSS Files/managefeedback_style.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />

    <title>Manage Feedback</title>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <img src="Logo/Logo Cinemation .png" alt="" class="logo_cinemation" />
        <div class="navigasi">
          <ul>
            <li>
              <a href="dashboard.php">
                <button>
                  <img src="Logo/Dashboard logo.png" alt="" />
                  <p>Dashboard</p>
                </button>
              </a>
            </li>
            <li>
              <a href="managemovies.php">
                <button>
                  <img src="Logo/Movie logo.png" alt="" />
                  <p>Manage Movies</p>
                </button>
              </a>
            </li>
            <li>
              <a href="managepromos.php">
                <button>
                  <img src="Logo/Promo logo.png" alt="" />
                  <p>Manage Promos</p>
                </button>
              </a>
            </li>
            <li>
              <a href="manageticket.php">
                <button>
                  <img src="Logo/Ticket logo.png" alt="" class="ticket_logo" />
                  <p>Manage Ticket</p>
                </button>
              </a>
            </li>
            <li>
              <a href="managefeedback.php">
                <button>
                  <img
                    src="Logo/Feedback logo.png"
                    alt=""
                    class="ticket_logo"
                  />
                  <p>Manage Feedback</p>
                </button>
              </a>
              <a href="manageusers.php">
                <button>
                  <img src="Logo/Users logo.png" alt="" class="ticket_logo" />
                  <p>Manage Users</p>
                </button>
              </a>
            </li>
          </ul>
        </div>
        <div class="username-section">
          <h6><?php echo $_SESSION['username'] ?></h6>
          <p><?php echo $_SESSION['email'] ?></p>
        </div>
        <a href="logout_admin.php"><button class="logout">logout</button></a>
      </div>

      <div class="content">
        <div class="bagian-atas">
          <a href="dashboard.php"><img src="Logo/Arrow logo.png" alt="" /></a>
          <h1>Manage Feedback</h1>
        </div>
        <form id="search-form">
          <input
            type="text"
            id="search-input"
            placeholder="Cari username atau email pengguna"
          />
          <button type="submit">Cari</button>
        </form>
        <h3>Feedback list :</h3>
        <div class="feedback-list">
          <?php while($card = mysqli_fetch_assoc($result)):?>
          <div class="card">
            <div class="atas">
              <h2><?= $card['username'];?></h2>
              <h4><?= $card['email'];?></h4>
              <h5><?= $card['no_hp'];?></h5>
            </div>

            <span>Isi Pesan : </span>
            <p class="message-text">
            <?= $card['pesan'];?>
            </p>
          </div>
          <?php endwhile;?>
        </div>
      </div>
    </div>
  </body>
</html>
