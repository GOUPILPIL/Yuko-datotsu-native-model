<?php function displaytache($stmt)
{ ?>
    <div class="container content-row">
    <div class="row">
    <?php foreach ($stmt as $row):?>
    <div class="col-sm-12 col-lg-4" style="padding-top: 10px">
        <div class="card border-success mb-3 h-100" style="max-width: 18rem;">
            <div class="card-header bg-transparent border-success"><?php echo $row['labeltache'] ?></div>
            <div class="card-body text-success">
                <h5 class="card-title">Priority : <?php echo numbertopriority($row['priority']) ?></h5>
                <p class="card-text"><?php echo $row['description']?></p>
            </div>
            <div class="card-footer bg-transparent border-success">
                <form action="" style="display: inline-block;" method="post">
                    <button name="edit" class="btn btn-outline-dark my-2 " value="<?php echo $row['tacheid']?>" style="margin-right: 10px;" type="submit">Edit</button>
                </form>
                <form action="" style="display: inline-block;" method="post">
                    <button name="delete" class="btn btn-outline-danger" value="<?php echo $row['tacheid']?>" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <?php endforeach ?>
    </div>
    </div>
<?php } ?>