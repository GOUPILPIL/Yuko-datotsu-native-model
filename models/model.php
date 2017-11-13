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
    function initbdd(){
     require __DIR__.'/config.php';
     try{
            $bdd = new PDO( "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password);
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
                    $useridlink = $_SESSION['id'];

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
                exit;
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
                exit;
            }
        }
        // END OF BDD MODIFICATION PART