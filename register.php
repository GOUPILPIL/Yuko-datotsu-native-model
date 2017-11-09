<?php
    require __DIR__.'/models/model.php';
    require __DIR__.'/models/registermodel.php';
    require __DIR__.'/models/connectmodel.php';
    $bdd = initbdd('todo_project');
    $stmt = $bdd->query('SELECT * FROM user');
    connecttoaccount($bdd);
    registeraccount($bdd);
    require __DIR__.'/views/register_view.php';   
?> 
    