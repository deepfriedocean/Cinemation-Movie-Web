<?php
session_start();
require 'functions.php';

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
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
    <link rel="stylesheet" href="CSS Files/dashboard_style.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap" rel="stylesheet" />

    <title>Dashboard</title>
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
                  <img src="Logo/Feedback logo.png" alt="" class="ticket_logo" />
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
        <div class="tulisan">
          <h1>Selamat Datang</h1>
          <h1><?php echo $_SESSION['username'] ?></h1>
          <h3>dashboard menu :</h3>
        </div>
        <div class="list-menu">
          <a href="managemovies.php">
            <div class="movies">
              <img src="Logo/Movie logo(white).png" alt="" class="movie_logo" />
              <h2>Manage Movie</h2>
            </div>
          </a>
          <a href="managepromos.php">
            <div class="promos">
              <img src="Logo/Promo logo(white).png" alt="" class="promo_logo" />
              <h2>Manage Promos</h2>
            </div>
          </a>
          <a href="manageticket.php">
            <div class="ticket">
              <img src="Logo/Ticket logo(white).png" alt="" class="ticket_logo" />
              <h2>Manage Ticket</h2>
            </div>
          </a>
          <a href="managefeedback.php">
            <div class="feedback">
              <img src="Logo/Feedback logo(white).png" alt="" class="feedback_logo" />
              <h2>Manage Feedback</h2>
            </div>
          </a>
          <a href="manageusers.php">
            <div class="users">
              <img src="Logo/Users logo (white).png" alt="" class="user_logo" />
              <h2>Manage Users</h2>
            </div>
          </a>
        </div>
      </div>
    </div>
  </body>

  </html>

<?php
}
?>