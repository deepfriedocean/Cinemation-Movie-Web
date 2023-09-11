<?php
session_start();

session_unset();
session_destroy();

echo "
    <script>

    alert('anda berhasil logout!');
    document.location.href = 'homepage.php';

    </script>"
;

// header("Location: homepage.php");
