<?php
    session_start ();
    require __DIR__.'/models/model.php';
    require __DIR__.'/models/session.php';
    $bdd = initbdd();
    $stmt = $bdd->query('SELECT * FROM tache WHERE useridlink =' . $_SESSION['id'] . ' order by priority desc');
    statemod($bdd);
    checkconnection();
    require __DIR__.'/displaytache.php';
    require __DIR__.'/views/index_view.php';
?>