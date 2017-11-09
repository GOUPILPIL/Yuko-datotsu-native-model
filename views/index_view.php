
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>TO DO LIST</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
    <form action="./delete.php">
    <input type="submit" value="This is a button link">
    </form> 
    
    <div id="msgid">
<nav class="navbar navbar-dark bg-primary">
    TO-DO-LIST
    <button id="boutton-display" class="btn btn-success my-2 my-sm-0" type="submit">Add a new Element</button>
</nav>
<div id="dmenu" class="jumbotron" style="display: none;">
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
<?php displaytache($stmt); ?>
</body>
</html>
