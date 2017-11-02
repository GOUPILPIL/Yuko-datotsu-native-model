<?php 
include 'bddconnect.php';
include 'displaytache.php';
include 'statemodification.php';
bddconnect(); // Connection BDD
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>TO DO LIST</title>
</head>
<nav class="navbar navbar-dark bg-primary">
    TO-DO-LIST
</nav>
<div class="jumbotron">
    <form action="" method="post">
        <div class="form-group">
            <label for="Addanelement">Add a new element :</label>
            <input type="text" class="form-control" name="lbl" aria-describedby="emailHelp" placeholder="Title of new To do list element">
            <small id="todolisthelper" class="form-text text-muted">Name of To do list element you want to add </small>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="descr" aria-describedby="emailHelp" placeholder="Content of element">
            <small id="todolisthelper" class="form-text text-muted">Content of To do list</small>
        </div>
        <button type="submit" value="OK" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="jumbotron">
    <?php displaytache(); // AFFICHAGE ELEMENT?>
</div>

<?php statemod(); // AJOUT + SUPPRESION?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="./js/scripts.js"></script>

</html>
