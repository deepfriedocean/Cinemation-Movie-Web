<?php
session_start();
include "functions.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location: login.php");
        exit();
    } else if (empty($password)) {
        header("Location: login.php");
        exit();
    } else {
        $sql = "SELECT * FROM customer WHERE email='$email' AND password='$password'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['id_customer'] = $row['id_customer'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                header("Location: homepage.php");
                exit();
            } else {
                header("Location: login.php");
                exit();
            }
        } else {
            header("Location: login.php");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
