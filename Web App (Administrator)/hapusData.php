<?php

include 'functions.php';

$id =  $_GET["id"];

$query = "DELETE FROM customer WHERE id_customer = $id";

mysqli_query($connection, $query);

if (mysqli_affected_rows($connection) > 0) {
    echo "
    <script>

    alert('data berhasil dihapus!');
    document.location.href = 'manageusers.php';


    </script>";
} else {
    echo "
    <script>

    alert('data gagal dihapus!');
    document.location.href = 'manageusers.php';


    </script>";
}
