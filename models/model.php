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
    function numbertopriority($str)
    {
        if($str == 0)
            return("Low");
        if($str == 1)
            return("Medium");
        if($str == 2)
            return ("High");
        return("Low");
    }

            // BDD INIT AND STATE MODIFICATION

function initbdd()
    {
        require __DIR__.'/config.php';
        try{
                $bdd = new PDO( "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password);
        }
            catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        } 
        return($bdd);
    }

function    AddElement($bdd , $priority, $lbl, $descr, $useridlink)
    {
        try{
                $sql = 'INSERT INTO tache (useridlink, labeltache, description, priority) VALUES (:useridlink, :labeltache, :description, :priority)';
                $statement = $bdd->prepare($sql);
                $statement->bindParam(':useridlink', $useridlink);
                $statement->bindParam(':labeltache', $lbl);
                $statement->bindParam(':description', $descr);
                $statement->bindParam(':priority', $priority);
                $statement->execute();       
        } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
        }
            header('Location:index.php');
            exit;
    }

function DeleteElement($bdd, $delete, $id)
    {
        try {
                $sql = 'DELETE FROM tache WHERE tacheid = :id AND  useridlink = :uid';
                $statement = $bdd->prepare($sql);
                $statement->bindParam(':id', $delete);
                $statement->bindParam(':uid', $id);
                $statement->execute();
        } catch (PDOException $e) {
                echo 'Connexion échouée : ' . $e->getMessage();
        }
        header('Location:index.php');
        exit;
    }

function    EditElement($bdd, $edit, $priority, $lbl, $descr, $id)
    {
        try {
            $sql = 'UPDATE tache SET labeltache = :labeltache, description = :description, priority = :priority  WHERE tacheid = :id AND useridlink = :uid';
            $statement = $bdd->prepare($sql);
            $statement->bindParam(':id', $edit);
            $statement->bindParam(':labeltache', $lbl);
            $statement->bindParam(':description', $descr);
            $statement->bindParam(':priority', $priority);
            $statement->bindParam(':uid', $id);
            $statement->execute();
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        header('Location:index.php');
        exit;
    }
        // END OF BDD MODIFICATION PART