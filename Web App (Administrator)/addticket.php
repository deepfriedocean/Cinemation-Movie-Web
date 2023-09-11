<?php
session_start();

require 'functions.php';

if (isset($_POST['input'])) {
  global $connection;
  // ambil data dari setiap elemen di form
  $judul = $_POST['judul'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];

  $query = "INSERT INTO ticket VALUES ('id_ticket', '$judul', '$harga', '$jumlah')";

  mysqli_query($connection, $query);

  // cek apakah data berhasil ditambahkan

  if (mysqli_affected_rows($connection) > 0) {
    // echo "tambah data berhasil";
    echo "
        <script>

        alert('data berhasil ditambahkan!');
        document.location.href = 'manageticket.php';


        </script>";
  } else {
    echo "
        <script>

        alert('data berhasil ditambahkan!');
        document.location.href = 'addticket.php';

        </script>";
  }
}


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
  <link rel="stylesheet" href="CSS Files/sidebar_style.css" />
  <link rel="stylesheet" href="CSS Files/addticket_style.css" />

  <!-- Import Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap" rel="stylesheet" />

  <title>Add Ticket</title>
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
        <h6>fauzan azima</h6>
        <p>fauzanazima@gmail.com</p>
      </div>
      <button class="logout">logout</button>
    </div>

    <div class="content">
      <div class="bagian-atas">
        <a href="manageticket.php"><img src="Logo/Arrow logo.png" alt="" /></a>
        <h1>Add Ticket</h1>
      </div>
      <div class="form-section">
        <form action="../Web App/buyticketpage.php" method="POST">
          <div>
            <label for="">masukan judul film</label>
            <br />
            <input type="text" class="input" placeholder="tulis judul film" name="judul" />
          </div>
          <div>
            <label for="">masukan harga ticket</label>
            <br />
            <input type="number" class="input" placeholder="masukan harga ticket" name="harga" />
          </div>
          <div>
            <label for="">masukan jumlah ticket</label>
            <br />
            <input type="number" class="input" placeholder="masukan jumlah ticket" name="jumlah" />
          </div>
          <div class="submit-section">
            <input type="submit" value="input" name="input" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>