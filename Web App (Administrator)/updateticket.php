<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_cinemation");

$id =  $_GET["id"];

if (isset($_POST['input'])) {
  global $conn;
  $judul = $_POST['judul'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];

  $query = "UPDATE ticket SET judul = '$judul', harga = '$harga', jumlah = '$jumlah' WHERE id_ticket = '$id'";

  mysqli_query($conn, $query);

  // cek apakah data berhasil ditambahkan

  if (mysqli_affected_rows($conn) > 0) {
    // echo "tambah data berhasil";
    echo "
          <script>
  
          alert('data berhasil diupdate!');
          document.location.href = 'manageticket.php';
  
  
          </script>";
  } else {
    echo "
          <script>
  
          alert('data berhasil diupdate!');
          document.location.href = 'updateticket.php';
  
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

  <title>Update Ticket</title>
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
      <div class="bagian-atas">
        <a href="manageticket.php"><img src="Logo/Arrow logo.png" alt="" /></a>
        <h1>Update Ticket</h1>
      </div>
      <div class="form-section">
        <form action="" method="POST">
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
            <input type="submit" value="Update" name="input" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>