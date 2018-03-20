<?php
/**
 * Created by PhpStorm.
 * User: Zephor
 * Date: 3/19/18
 * Time: 4:41 PM
 */

session_start ();
require __DIR__.'/models/model.php';
require __DIR__.'/models/session.php';

if(!isset($_SESSION['id']))
{
    header('Location:register.php');
    exit();
}
$bdd = initbdd();
$stmt = $bdd->query('SELECT * FROM tache WHERE tacheid =' . $_GET['id']);

if (isset($_POST["edit"]))
{
    $edit = $_POST["edit"];
    $priority = prioritytonumber($_POST['priority']);
    $lbl = htmlspecialchars($_POST['lbl']);
    $descr = htmlspecialchars($_POST['descr']);
    $id = $_SESSION['id'];
    EditElement($bdd, $edit, $priority, $lbl, $descr, $id);
}

require __DIR__.'/views/edit_view.php';
