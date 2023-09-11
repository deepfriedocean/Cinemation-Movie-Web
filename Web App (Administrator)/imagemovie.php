<?php
$conn = mysqli_connect("localhost", "root", "", "db_cinemation");

$query = mysqli_query($conn, "SELECT * FROM movie WHERE id_movie = '{$_GET['id_movie']}'");
if (isset($_POST['id_movie'])) {
    $card = mysqli_fetch_array($query);
    echo $card["poster"];
}
