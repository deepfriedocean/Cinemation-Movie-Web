<?php
// require "functions.php";
// if (isset($_POST["login"])) {
//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     $result = mysqli_query($connection, "SELECT * FROM customer WHERE email = '$email'");

//     // cek email
//     if (mysqli_num_rows($result) === 1) {
//         $row = mysqli_fetch_assoc($result);
//         // cek password
//         if ($password === $row['password']) {
//             $_SESSION['id_customer'] = $row['id_customer'];
//             exit();
//         } else {
//             echo "<script>alert('Password Salah');
//             window.location='loginpage.php';
//             </script>";
//         }
//     } else {
//         echo "<script>alert('Password Salah');
//           window.location='loginpage.php';
//           </script>";
//     }
// }
// ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Website icon-->
    <link rel="Website Icon" type="png" href="Logo/Logo Cinemation .png" />

    <!-- External CSS -->
    <link rel="stylesheet" href="CSS files/css_reset.css" />
    <link rel="stylesheet" href="CSS files/loginpage_style.css" />
    <link rel="stylesheet" href="CSS files/fontfamily.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>

  <body>
    <div class="container">
      <div class="container-img">
        <img src="Image/Frame  (Full Screen).png" alt="" />
      </div>

      <div class="form-section">
        <img src="Logo/Logo Cinemation (Form).png" alt="" />
        <div class="tulisan">
          <h2>Log in</h2>
          <p>Welcome back! please enter your detail</p>
        </div>

        <form action="configlogin.php" method="POST">
          <div class="email-section">
            <label for="email">Email</label>
            <br />
            <input type="text" placeholder="Enter your email" name="email" />
            <br />
          </div>

          <div class="password-section">
            <label for="password">Password</label>
            <br />
            <input
              type="password"
              placeholder="Write your password"
              name="password"
            />
          </div>

          <div class="submit-section">
            <input type="submit" value="Log in" name="login" />
          </div>
        <?php if (isset($error)): ?>
          <script> alert('username / password salah') </script>
        <?php endif;?>
          <div class="question">
            <p>Don't have an account? <a href="signuppage.php">Sign Up</a></p>
          </div>
          <div class="login_admin">
            <p><a href="../Web App (Administrator)/loginpage_admin.php">login as admin</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
