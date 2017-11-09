<?php
    function checkconnection()
    {
        if(!isset($_SESSION['user']))
        {
            echo"CONNECTER VOUS";
            exit();
        }
        echo $_SESSION['user'];
        session_id();
    }
    // Ajouter where  useridlink = $_SESSION[id]. Creer nouveau fichier avec preparation query.
