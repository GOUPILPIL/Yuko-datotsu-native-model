<?php 

    // TOOLS
    function prioritytonumber($str)
    {
        if($str == "Low")
            return(0);
        if($str == "Medium")
            return(1);
        if($str == "High")
            return (2);
        return(0);
    }

            // BDD INIT AND STATE MODIFICATION
    function initbdd($bddname){
        
     try{
            $bdd = new PDO('mysql:host=localhost;dbname='. $bddname .';charset=utf8', 'root', 'root');
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        } 
    return($bdd);
    }

    function    statemod($bdd){
            if (isset($_POST["submit"])) {
                try {

                    $priority = prioritytonumber($_POST['priority']);
                    $lbl = htmlspecialchars($_POST['lbl']);
                    $descr = htmlspecialchars($_POST['descr']);

                    $sql = 'INSERT INTO tache (labeltache, description, priority) VALUES (:labeltache, :description, :priority)';
                    $statement = $bdd->prepare($sql);
                    $statement->bindParam(':labeltache', $lbl);
                    $statement->bindParam(':description', $descr);
                    $statement->bindParam(':priority', $priority);
                    $statement->execute();       
                } catch (PDOException $e) {
                        echo 'Connexion échouée : ' . $e->getMessage();
                }
                header('Location:index.php');
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
            }
            if (isset($_POST["edit"])){
                try {
                $priority = prioritytonumber($_POST['priority']);
                $lbl = htmlspecialchars($_POST['lbl']);
                $descr = htmlspecialchars($_POST['descr']);

                $sql = 'UPDATE tache SET labeltache = :labeltache, description = :description, priority = :priority  WHERE tacheid = :id';
                $statement = $bdd->prepare($sql);
                $statement->bindParam(':id', $_POST['edit']);
                $statement->bindParam(':labeltache', $lbl);
                $statement->bindParam(':description', $descr);
                $statement->bindParam(':priority', $priority);
                $statement->execute();
                } catch (PDOException $e) {
                        echo 'Connexion échouée : ' . $e->getMessage();
                }
                header('Location:index.php');   
            }
        }
        // END OF BDD MODIFICATION PART