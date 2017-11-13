<?php
 function    registeraccount($bdd){
    if (isset($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
        $privatekey = "6LdPATgUAAAAAKjOfI0pJktgLddW4iSnArD3eHHO";
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $privatekey,
            'response' => $captcha,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        );
            $curlConfig = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $data
        );

        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);
        curl_close($ch);
        $jsonResponse = json_decode($response);
    }
            if (isset($_POST["submitRegister"], $_POST['registerMail'], $_POST['registerUser'], $_POST['registerPwd'])) {
                    
                    if($jsonResponse->success != "true")
                    {
                        echo "something go wrong !";
                    }
                    else
                    {
                
                    $mail = htmlspecialchars($_POST['registerMail']);
                    $user = htmlspecialchars($_POST['registerUser']);
                    $pwd = htmlspecialchars($_POST['registerPwd']);
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
      } 
?>