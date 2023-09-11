<?php

$conn = mysqli_connect("localhost","root","", "db_cinemation");

$id =  $_GET["id"];

$query = "DELETE FROM ticket WHERE id_ticket = $id";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "
    <script>

    alert('data berhasil dihapus!');
    document.location.href = 'manageticket.php';


    </script>";
} else {
    echo "
    <script>

    alert('data gagal dihapus!');
    document.location.href = 'manageticket.php';


    </script>";
}
