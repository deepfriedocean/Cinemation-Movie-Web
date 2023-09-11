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
    <link rel="stylesheet" href="CSS files/signuppage_style.css" />
    <link rel="stylesheet" href="CSS files/fontfamily.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap"
      rel="stylesheet"
    />

    <title>Sign Up</title>
  </head>
  <body>
    <div class="container">
      <div class="left-section">
        <img src="Logo/Logo Cinemation (Form).png" alt="" />
        <div class="tulisan">
          <h2>Sign Up</h2>
          <p>Sign up now and get full access to our app</p>
        </div>

        <form action="signup.php" METHOD="POST" NAME="submit" class="form-section">
          <div class="username-section">
            <label for="username">Username</label>
            <br />
            <input
              type="text"
              name="username"
              placeholder="Enter your username"
            />
          </div>

          <div class="email-section">
            <label for="email">Email</label>
            <br />
            <input type="text" name="email" placeholder="Enter your email" />
          </div>

          <div class="password-section">
            <label for="password">Password</label>
            <br />
            <input
              type="password"
              name="password"
              placeholder="Write your password"
            />
          </div>

          <div class="submit-section">
            <input type = "submit" name = "submit" />
          </div>

          <div class="question">
            <p>Already have account? <a href="loginpage.php">login</a></p>
          </div>
        </form>
      </div>
      <div class="right-section">
        <img src="Image/Frame.png" alt="" />
      </div>
    </div>
  </body>
</html>
