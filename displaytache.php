<?php function displaytache($stmt)
{ ?>
<div class="jumbotron">
    <?php foreach ($stmt as $row):?>

    <h1 class="display-3"> <?php echo $row['labeltache'] ?> </h1>
    <p class="lead">Priority : <?php echo numbertopriority($row['priority']) ?> </p>
    <p class="lead"> <?php echo $row['description']?> </p>
    
    
    <form action="" method="post">
        <button type="submit" name="delete" value="<?php echo $row['tacheid']?>" class="btn btn-danger">Delete</button>
    </form>
    
    <button id="boutton-display2" class="btn btn-warning" type="submit" >Edit</button>
    <div class="dmenu2" style="display: none;" >
    <form  action="" method="post" >
        
        <div class="form-group">
            <label for="Addanelement">Edit this element :</label>
            <input value="<?php echo $row['labeltache'] ?>" type="text" class="form-control" name="lbl">
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
    </div>
    <hr class="my-4">
    <?php endforeach ?>
</div>
<?php } ?>