<?php
/**
 * Created by PhpStorm.
 * User: Zephor
 * Date: 3/19/18
 * Time: 3:46 PM
 */

    session_start ();
    require __DIR__.'/models/model.php';
    require __DIR__.'/models/session.php';

    $bdd = initbdd();

    if(!isset($_SESSION['id']))
    {
        header('Location:register.php');
        exit();
    }

   if (isset($_POST["submit"])) {
       $priority = prioritytonumber($_POST['priority']);
       $lbl = htmlspecialchars($_POST['lbl']);
       $descr = htmlspecialchars($_POST['descr']);
       $useridlink = $_SESSION['id'];
       AddElement($bdd, $priority, $lbl, $descr, $useridlink);
       header('Location:list.php');
   }
    require __DIR__.'/views/add_view.php';