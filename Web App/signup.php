<?php
require 'functions.php';

if (isset($_POST['submit'])) {

    // ambil data dari setiap elemen di form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO customer VALUES ('id_customer', '$username', '$email', '$password')";

    mysqli_query($connection, $query);

    // cek apakah data berhasil ditambahkan

    if (mysqli_affected_rows($connection) > 0) {
        // echo "tambah data berhasil";
        echo "
        <script>

        alert('data berhasil ditambahkan!');
        document.location.href = 'loginpage.php';


        </script>"
        ;

    } else {
        echo "
        <script>

        alert('data berhasil ditambahkan!');
        document.location.href = 'signuppage.html';

        </script>"
        ;
    }

}
