<?php
session_start();
session_unset();
session_destroy();

echo "
    <script>

    alert('anda berhasil logout!');
    document.location.href = 'loginpage_admin.php';

    </script>"
;

// header("Location: loginpage_admin.php");
