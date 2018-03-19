<?php
/**
 * Created by PhpStorm.
 * User: Zephor
 * Date: 3/19/18
 * Time: 2:55 PM
 */

    require __DIR__.'/models/model.php';
    require __DIR__.'/models/connectmodel.php';
    $bdd = initbdd('todo_project');
    $stmt = $bdd->query('SELECT * FROM user');

    if (isset($_POST['User'], $_POST['Pwd']))
    {

        $user = htmlspecialchars($_POST['User']);
        $pwd = htmlspecialchars($_POST['Pwd']);
        connecttoaccount($bdd, $user, $pwd);
    }

    require __DIR__.'/views/connectmodel.php';
?>
