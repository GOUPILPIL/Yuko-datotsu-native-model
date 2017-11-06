<?php
    require __DIR__.'/model.php';
    $bdd = initbdd('todo_project');
    $stmt = $bdd->query('SELECT * FROM tache order by priority desc');
    statemod($bdd);
    require __DIR__.'/displaytache.php';
    require __DIR__.'/view.php';
?>