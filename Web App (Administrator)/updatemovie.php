<?php
session_start();
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_cinemation");

$id =  $_GET["id"];

if (isset($_POST["submit"])) {
    //mengambil data dari tiap elemen form
    $judul = $_POST["judul"];
    $genre = $_POST["genre"];
    $range_umur = $_POST["range_umur"];
    $durasi_film = $_POST["durasi"];
    $studio = $_POST["studio"];
    $tanggal = $_POST["tanggal"];
    $director = $_POST["director"];
    $trailer = $_POST["trailer"];
    $kategori = $_POST["kategori"];
    $synopsis = $_POST["synopsis"];
    $poster = $_POST["poster"];

    $query = "UPDATE movie SET  judul = '$judul', genre = '$genre', range_umur = '$range_umur', durasi = '$durasi_film', studio = '$studio', tanggal = '$tanggal', director = '$director', trailer = '$trailer', kategori = '$kategori', synopsis = '$synopsis', poster = '$poster' WHERE id_movie = '$id'";
    // $query = "UPDATE ticket SET judul = '$judul', harga = '$harga', jumlah = '$jumlah' WHERE id_ticket = '$id'";

    mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        echo "
          <script>
          alert('Data berhasil ditambahkan!');
          document.location.href = 'managemovies.php';
          </script>
        ";
    } else {
        echo "
          <script>
          alert('Data gagal ditambahkan!');
          document.location.href = 'managemovies.php';
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
    <link rel="stylesheet" href="CSS Files/addmovie_style.css" />

    <!-- Import Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Karla:wght@200&display=swap" rel="stylesheet" />

    <title>Update Movie</title>
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
                <a href="managemovies.php"><img src="Logo/Arrow logo.png" alt="" /></a>
                <h1>Update Movie</h1>
            </div>
            <div class="form-section">
                <form action="" method="post">
                    <div class="form-judul">
                        <label for="">Masukan judul movie</label>
                        <br />
                        <input type="text" placeholder="tulis judul movie" class="input" name="judul" />
                    </div>

                    <div class="form-genre">
                        <label for="">Masukan genre movie</label>
                        <br />
                        <input type="text" placeholder="tulis genre movie" class="input" name="genre" />
                    </div>

                    <div class="form-umur">
                        <label for="">Masukan range umur</label>
                        <br />
                        <input type="text" placeholder="tulis range umur" class="input" name="range_umur" />
                    </div>

                    <div class="form-durasi">
                        <label for="">Masukan durasi film</label>
                        <br />
                        <input type="text" placeholder="tulis durasi umur" class="input" name="durasi" />
                    </div>

                    <div class="form-studio">
                        <label for="">Masukan nama studio</label>
                        <br />
                        <input type="text" placeholder="tulis nama studio" class="input" name="studio" />
                    </div>

                    <div class="input-tanggal">
                        <label for="">Masukan tanggal tayang</label>
                        <br />
                        <input type="date" id="tanggal" name="tanggal" />
                    </div>

                    <div class="form-director">
                        <label for="">Masukan director</label>
                        <br />
                        <input type="text" placeholder="tulis nama director" class="input" name="director" />
                    </div>

                    <div class="form-director">
                        <label for="">Masukan link trailer</label>
                        <br />
                        <input type="text" placeholder="tulis trailer" class="input" name="trailer" />
                    </div>

                    <div class="form-category">
                        <label for="">Masukan Kategori Film</label>
                        <br />
                        <select name="kategori" id="category">
                            <option value="Now Playing Movie">Now Playing Movie</option>
                            <option value="Upcoming Movie">Upcoming Movie</option>

                        </select>
                    </div>

                    <div class="form-synopsis">
                        <label for="">Masukan synopsis movie</label>
                        <br />
                        <textarea name="synopsis" id="" cols="30" rows="10" placeholder="tulis synopsis movie"></textarea>
                    </div>

                    <div class="input-poster">
                        <label for="">Masukan poster movie</label>
                        <br />
                        <input type="text" placeholder="tulis file movie" class="input" name="poster" />
                    </div>

                    <div class="submit-section">
                        <input type="submit" value="update" name="submit" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>