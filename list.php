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

   if (isset($_POST["submit"])) {
        $priority = prioritytonumber($_POST['priority']);
        $lbl = htmlspecialchars($_POST['lbl']);
        $descr = htmlspecialchars($_POST['descr']);
        $useridlink = $_SESSION['id'];
        AddElement($bdd, $priority, $lbl, $descr, $useridlink);
        header('Location:list.php');
   }
    if (isset($_POST["delete"])) {

        $delete = $_POST['delete'];
        $id = $_SESSION['id'];
        DeleteElement($bdd, $delete, $id);
        }

    if (isset($_POST["edit"]))
    {
        $edit = $_POST["edit"];
        $priority = prioritytonumber($_POST['priority']);
        $lbl = htmlspecialchars($_POST['lbl']);
        $descr = htmlspecialchars($_POST['descr']); 
        $id = $_SESSION['id'];
        EditElement($bdd, $edit, $priority, $lbl, $descr, $id);
    }
    require __DIR__.'/views/displaytache.php';
    require __DIR__ . '/views/list_view.php';
?>