<?php
//koneksi ke database
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_cinemation");

if (isset($_POST["submit"])) {
    //mengambil data dari tiap elemen form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $no_hp = $_POST["no_hp"];
    $pesan = $_POST["pesan"];

    $query = "INSERT INTO message
                values
                ('','$name','$email','$no_hp','$pesan')
                ";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "
          <script>
          alert('Pesan anda telah terkirim!');
          document.location.href = 'contactUspage.php';
          </script>
        ";
    } else {
        echo "
          <script>
          alert('pesan anda gagal terkirim!');
          document.location.href = 'contactUspage.php';
          </script>
        ";
    }
}

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
    <link rel="stylesheet" href="CSS files/css_reset.css" />
    <link rel="stylesheet" href="CSS files/fontfamily.css" />
    <link rel="stylesheet" href="CSS files/header_style.css" />
    <link rel="stylesheet" href="CSS files/footer_style.css" />
    <link rel="stylesheet" href="CSS files/contactUspage_style.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />

    <title>Contact Us</title>
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
          <p>Home /<span>Contact Us</span></p>
        </div>

        <div class="logo">
          <img
            src="Logo/casual-life-3d-white-envelope-with-blue-letter-inside.png"
            alt=""
          />
        </div>

        <div class="tulisan">
          <h2>CONTACT CINEMATION</h2>
          <p>
            We want to hear from you! Do you have any feedback or questions for
            us? if you have any question, we may already have the answer.
          </p>
        </div>

        <div class="form-section">
          <form action="" method="post">
            <div class="name-section">
              <label for="name">Name</label>
              <input
                type="text"
                name="name"
                placeholder="enter your name here"
                value="<?php $name;?>"
              />
            </div>
            <div class="email-section">
              <label for="email">Email</label>
              <input
                type="text"
                name="email"
                placeholder="enter your email here"
                value="<?php $email;?>"
              />
            </div>
            <div class="hp-section">
              <label for="no_hp">Phone Number</label>
              <input
                type="text"
                name="no_hp"
                placeholder="enter your phone number here"
                value="<?php $no_hp;?>"
              />
            </div>
            <div class="message-section">
              <label for="message">Message</label>
              <textarea
                name="pesan"
                id=""
                name="message"
                cols="30"
                rows="10"
                placeholder="Write your message here"
                value="<?php echo $pesan; ?>"
              ></textarea>
            </div>
            <div class="submit-section">
              <input type="submit" value="send" name="submit"/>
            </div>
          </form>
        </div>

        <div class="other-section">
          <a href="otheroptionpage.php"><p>Use other option</p></a>
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

alert('Anda harus login terlebih dahulu untuk dapat menggunakan halaman ini!');
document.location.href = 'homepage.php';

</script>"
    ;
}
?>