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
            <label for="Priorityform">Priority</label>
            <select class="selectpicker" name="priority" id="Priorityform">
              <option>High</option>
              <option>Medium</option>
              <option>Low</option>
            </select>
        <button type="submit" value="OK" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="jumbotron">
    <?php   $stmt = $bdd->query('SELECT * FROM tache');
        while ($row = $stmt->fetch()){ ?>
            <h1 class="display-3"><?php echo $row['labeltache'] ?> </h1>
            <p class="lead"> <?php echo $row['description']?></p>
            <p class="lead"> <?php echo $row['priority']?></p>
            <form action="" method="post"> 
            <button type="submit" name="delete" value="<?php echo $row['tacheid']?>" class="btn btn-danger">Delete</button>
            </form>
            <button id="boutton-display" class="btn btn-warning">Edit</button>
           
            <form action="" method="post">
                <div class="form-group">
                    <label for="Addanelement">Edit this element :</label>
                    <input value="<?php echo $row['labeltache'] ?>" type="text" class="form-control" name="lbl"  >
                    <small id="todolisthelper" class="form-text text-muted">Name of To do list element you want to add </small>
                </div>
                <div class="form-group">
                    <input value="<?php echo $row['description'] ?>" type="text" class="form-control" name="descr">
                    <small id="todolisthelper" class="form-text text-muted">Content of To do list</small>
                </div>
                <select class="selectpicker" name="priority" id="Priorityform">
                      <option>High</option>
                      <option>Medium</option>
                      <option>Low</option>
                </select>
                <button type="submit" value="<?php echo $row['tacheid']; ?>" name="edit" class="btn btn-primary">Submit</button>
                </form>
            <hr class="my-4">
       <?php } ?>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="./js/scripts.js"></script>

</html>
