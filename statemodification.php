<?php

function    statemod(){
    global $bdd;
    if (isset($_POST["submit"])) {

        try {
            
            $lbl = htmlspecialchars($_POST['lbl']);
            $descr = htmlspecialchars($_POST['descr']);
            
            $sql = 'INSERT INTO tache (labeltache, description) VALUES (:labeltache, :description)';
            $statement = $bdd->prepare($sql);
            $statement->bindParam(':labeltache', $lbl);
            $statement->bindParam(':description', $descr);
            $statement->execute();       
        } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
        }
       echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
    }

    if (isset($_POST["delete"])) {

        try {
        $sql = 'DELETE FROM tache WHERE tacheid = :id';
        $statement = $bdd->prepare($sql);
        $statement->bindParam(':id', $_POST['delete']);
        $statement->execute();
        } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
        }
        echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
    }    
}
?>
