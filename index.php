<?php
    require __DIR__.'/model.php';
    $bdd = initbdd();
    statemod($bdd);
    require __DIR__.'/view.php';
?>