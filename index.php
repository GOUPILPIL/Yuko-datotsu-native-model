<?php
    require __DIR__.'/model.php';
    $bdd = initbdd('todo_project');
    statemod($bdd);
    require __DIR__.'/view.php';
?>