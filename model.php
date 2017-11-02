<?php 
    function initbdd(){
        
     try{
            $bdd = new PDO('mysql:host=localhost;dbname=todo_project;charset=utf8', 'root', 'root');
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        } 
    return($bdd);
    }
function    statemod($bdd){
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
        header('Location:index.php');
      // echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
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
        header('Location:index.php');
       // echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
    }
    }    