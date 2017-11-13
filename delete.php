<?php session_start (); ?>
<!doctype html>
<head>
</head>
<body>
    <?php
    session_unset ();
    session_destroy ();
    echo "Deconnection OK !";
    ?>
    <meta http-equiv="refresh" content="3; url=http://localhost:8888/jaroflife/register.php">
</body>