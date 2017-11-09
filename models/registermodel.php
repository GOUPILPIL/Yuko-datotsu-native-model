<?php
 function    registeraccount($bdd){
            if (isset($_POST["submitRegister"], $_POST['registerMail'], $_POST['registerUser'], $_POST['registerPwd'])) {
                
                    $mail = htmlspecialchars($_POST['registerMail']);
                    $user = htmlspecialchars($_POST['registerUser']);
                    $pwd = htmlspecialchars($_POST['registerPwd']);
                    //$pwd = md5($pwd);
                    $test = $bdd->prepare('SELECT login FROM user WHERE login = :user');
                    $test->bindParam(':user', $user);
                    $test->execute();
                    $count = $test->rowCount(); 
                    if($count >= 1) 
                    { 
                        echo 'This username already exist';
                        return(0);
                    }
                    if(strlen($user) > 32 || strlen($pwd) > 32 || !filter_var($mail, FILTER_VALIDATE_EMAIL))
                    {
                        echo ("Error, user or password is too long");
                        return(0);
                    }
                    try {
                        $sql = 'INSERT INTO user (login, password, mail) VALUES (:user, :pwd, :mail)'; // a check c'est pas bon
                        $statement = $bdd->prepare($sql);
                        $statement->bindParam(':mail', $mail);
                        $statement->bindParam(':user', $user);
                        $statement->bindParam(':pwd', $pwd);
                        $statement->execute();       
                    } catch (PDOException $e) {
                            echo 'Connexion échouée : ' . $e->getMessage();
                    }
                    //header('Location:register.php');
                    //exit;
                    echo "Your account has been created";
                }
      } 
?>