<?php
session_start();
require 'functions.php';

$result = mysqli_query($connection, "SELECT * FROM customer");

// $user = mysqli_fetch_array($result);

// var_dump($user[0]);

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
    <link rel="stylesheet" href="CSS Files/manageusers_style.css" />
    <link rel="stylesheet" href="CSS Files/tableusers_style.css" />

    <!-- External JS -->
    <!-- <script src="JS Files/tableusers_script.js"></script> -->

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap" rel="stylesheet" />

    <title>Manage Users</title>
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
                <a href="dashboard.php"><img src="Logo/Arrow logo.png" alt="" /></a>
                <h1>Manage Users</h1>
            </div>
            <h3>movie list :</h3>
            <div class="table-section">
                <table id="users">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>user_id</th>
                            <th>username</th>
                            <th>email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php while ($customer = mysqli_fetch_assoc($result)) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $customer["id_customer"]; ?></td>
                                <td><?= $customer["username"]; ?></td>
                                <td><?= $customer["email"]; ?></td>
                                <td>
                                    <a href="hapusData.php?id=<?= $customer["id_customer"]; ?>"><img src="Logo/Trash.png" alt="delete" /></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endwhile; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>