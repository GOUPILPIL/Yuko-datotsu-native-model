
<?php
if(isset($_SESSION['user']))
{
    require_once 'HeaderConnected.php';
}
else
{
    require_once 'Header.php';
}

?>
    <?php displaytache($stmt); ?>
<?php require_once 'Endbody.php' ?>