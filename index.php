<?php
    session_start ();
    require __DIR__.'/models/model.php';
    require __DIR__.'/models/session.php';
    if(!isset($_SESSION['id']))
    {
        header('Location:register.php');
        exit();
    }
    $bdd = initbdd();
    $stmt = $bdd->query('SELECT * FROM tache WHERE useridlink =' . $_SESSION['id'] . ' order by priority desc');
    statemod($bdd);
    require __DIR__.'/views/displaytache.php';
    require __DIR__.'/views/index_view.php';
?>