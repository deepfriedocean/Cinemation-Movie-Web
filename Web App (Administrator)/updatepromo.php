<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_cinemation");


$id = $_GET["id"];
if (isset($_POST['input'])) {
  $judul = $_POST['judul'];
  $kupon = $_POST['kupon'];
  $subjudul = $_POST['subjudul'];
  $deskripsi = $_POST['deskripsi'];
  $syarat_ketentuan = $_POST['syarat_ketentuan'];
  $cara_menggunakan = $_POST['cara_menggunakan'];
  $tanggal_mulai = $_POST['tanggal_mulai'];
  $tanggal_berakhir = $_POST['tanggal_berakhir'];
  $poster = $_POST['poster'];

  $query = "UPDATE promo SET judul = '$judul', kupon = '$kupon', subjudul = '$subjudul', deskripsi = '$deskripsi', syarat_ketentuan = '$syarat_ketentuan', cara_menggunakan = '$cara_menggunakan', tanggal_mulai = '$tanggal_mulai', tanggal_berakhir = '$tanggal_berakhir', poster = '$poster' WHERE id_promo = '$id'";

  mysqli_query($conn, $query);

  if (mysqli_affected_rows($conn) > 0) {
    echo "
      <script>
      alert('Data berhasil diubah!');
      document.location.href = 'managepromos.php';
      </script>
    ";
  } else {
    echo "
      <script>
      alert('Data gagal diubah!');
      document.location.href = 'updatepromo.php';
      </script>
    ";
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
  <link rel="stylesheet" href="CSS Files/css_reset.css" />
  <link rel="stylesheet" href="CSS Files/fontfamily.css" />
  <link rel="stylesheet" href="CSS Files/sidebar_style.css" />
  <link rel="stylesheet" href="CSS Files/editpromo_style.css" />

  <!-- Import Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap" rel="stylesheet" />

  <title>Edit Promo</title>
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
        <a href="managepromos.php"><img src="Logo/Arrow logo.png" alt="" /></a>
        <h1>Edit Promo</h1>
      </div>
      <h5>Silahkan ubah data - data promo</h5>
      <div class="form-section">
        <form action="" method="post">
          <div class="form-judul">
            <label for="">Masukan judul promo</label>
            <br />
            <input type="text" placeholder="tulis judul promo" class="input" name="judul" />
          </div>

          <div class="kode-kupon">
            <label for="">Masukan kode kupon</label>
            <br />
            <input type="text" placeholder="tulis subjudul promo" class="input" name="kupon" />
          </div>

          <div class="form-subjudul">
            <label for="">Masukan subjudul promo</label>
            <br />
            <input type="text" placeholder="tulis subjudul promo" class="input" name="subjudul" />
          </div>

          <div class="form-synopsis">
            <label for="">Masukan deskripsi promo</label>
            <br />
            <textarea name="deskripsi" id="" cols="30" rows="10" placeholder="tulis synopsis promo"></textarea>
          </div>

          <div class="form-synopsis">
            <label for="">Masukan syarat dan ketentuan</label>
            <br />
            <textarea name="syarat_ketentuan" id="" cols="30" rows="10" placeholder="tulis syarat dan ketentuan"></textarea>
          </div>

          <div class="form-synopsis">
            <label for="">Masukan cara menggunakan promo</label>
            <br />
            <textarea name="cara_menggunakan" id="" cols="30" rows="10" placeholder="tulis cara menggunakan promo"></textarea>
          </div>

          <div class="input-tanggal">
            <div class="tanggal-mulai">
              <label for="tanggal">Tanggal Mulai :</label>
              <input type="date" id="tanggal" name="tanggal_mulai" />
            </div>
            <div class="tanggal-berakhir">
              <label for="tanggal">Tanggal Berakhir :</label>
              <input type="date" id="tanggal" name="tanggal_berakhir" />
            </div>
          </div>

          <div class="input-poster">
            <label for="">Masukan poster promo</label>
            <br />
            <input type="text" placeholder="masukkan poster" class="input" name="poster" />
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