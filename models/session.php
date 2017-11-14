<?php
    function checkconnection()
    {
        if(!isset($_SESSION['user']))
        {
            echo"CONNECTEZ-VOUS";
            exit();
        }
        echo $_SESSION['user'];
        session_id();
    }

