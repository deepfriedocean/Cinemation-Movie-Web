<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
  
  $conn = mysqli_connect("localhost", "root", "", "db_cinemation");
  
  
  $create_datetime = date("Y-m-d H:i:s");
  $id_movie = $_GET['id_movie'];
  $id_customer = $_SESSION['id_customer'];
  
  $qry = "SELECT * FROM movie WHERE id_movie = '$id_movie'";
  $hasil = mysqli_query($conn, $qry);
  
  $row = $hasil->fetch_assoc(); 

  $query = "SELECT * FROM ticket WHERE judul LIKE '%{$row['judul']}%'";
  $hasil_ticket = mysqli_query($conn, $query);
  $row_ticket = $hasil_ticket->fetch_assoc(); 

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $kupon = $_POST['kupon'];
        $query = "SELECT * FROM promo WHERE kupon = '$kupon'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $coupon = $kupon;
            echo "
        <script>
        alert('Kupon telah didapatkan!');
        </script>
        ";
        } else {
            $coupon = "no-coupon";
            echo "
        <script>
        alert('Kupon tidak didapatkan!');
        </script>
        ";
        }
    }
    
    if (isset($_POST["input"])) {
        $kartu_kredit = $_POST['kartu_kredit'];
        $query = "INSERT INTO `transaksi` VALUES ('no_transaksi','$id_customer','$id_movie','$coupon','$create_datetime','$kartu_kredit')";

        $result = mysqli_query($conn, $query);
        
        if ($result){   
        $query = "UPDATE `ticket` set jumlah = jumlah - 1 WHERE jumlah > 0 AND id_ticket = '{$row_ticket['id_ticket']}'";
        $result_ticket = mysqli_query($conn, $query);
            echo "
            <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'transactionhistory.php';
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
    <link rel="stylesheet" href="CSS files/header_style.css" />
    <link rel="stylesheet" href="CSS files/footer_style.css" />
    <link rel="stylesheet" href="CSS files/buyticketpage_style.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />

    <title>Buy ticket</title>
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

    <!-- <?php $card = mysqli_fetch_assoc($hasil)?> -->
    <div class="container">
      <img src="Logo/Logo Cinemation .png" alt="" />
      <div class="main">
        <form action="" method="post">
        <h1>Order Summary</h1>
        <div class="main-detail">
          <h2><?=$row_ticket['judul'];?></h2>
          <h3>1 ticket</h3>
          <h3>IDR 30.000</h3>
        </div>
        <hr />
        <div class="tanggal-transaksi">
          <img src="Logo/Logo Durasi.png" alt="" />
          <h3><?php echo $create_datetime; ?></h3>
        </div>
        <div class="input-kupon">
          <input type="text" placeholder="Use a promo code or cupon" name="kupon"/>
          <button type="submit">Use</button>
        </div>
        <div class="other-detail">
          <ul>
            <li>
              <div>
                <h3>Subtotal</h3>
                <h3>IDR 30.000</h3>
              </div>
            </li>
            <li>
              <div>
                <h3>Discount</h3>
                <h3>IDR 0</h3>
              </div>
            </li>
            <li>
              <div>
                <h3>Promo</h3>
                <h3>IDR 30.000</h3>
              </div>
            </li>
          </ul>
        </div>
        <hr />
        <div class="payment-section">
          <h2>Payment</h2>
          <div class="payment-form">
            <input type="text" placeholder="Insert credit card" name="kartu_kredit"/>
          </div>
        </div>
        <hr />
        <div class="button-section">
          <input type="submit" value="buy ticket" name="input">
        </div>
        </form>
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
} 
else {
    echo "
<script>
alert('Anda harus login terlebih dahulu untuk dapat membeli!');
// document.location.href = 'homepage.php';
</script>";
}
?>