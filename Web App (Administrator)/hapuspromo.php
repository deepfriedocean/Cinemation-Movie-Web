<?php

$conn = mysqli_connect("localhost","root","", "db_cinemation");

$id =  $_GET["id"];

$query = "DELETE FROM promo WHERE id_promo = $id";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "
    <script>

    alert('data berhasil dihapus!');
    document.location.href = 'managepromos.php';


    </script>";
} else {
    echo "
    <script>

    alert('data gagal dihapus!');
    document.location.href = 'managepromos.php';


    </script>";
}
