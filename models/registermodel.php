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

/*function MailKey();
{
    $key = md5(microtime(TRUE)*100000);
    
    $stmt = $dbh->prepare("UPDATE user SET userkey = :key WHERE login = :user");
    $stmt->bindParam(':key', $key);
    $stmt->bindParam(':user', $user);
    $stmt->execute();
    
    $destinataire = $email;
    $sujet = "Activer votre compte" ;
    $entete = "From: localtodolist@goupilpil.com" ;

    // Le lien d'activation est composé du login(log) et de la clé(cle)
    $message = 'Bienvenue sur VotreSite,

    Pour activer votre compte, veuillez cliquer sur le lien ci dessous
    ou copier/coller dans votre navigateur internet.

    http://localhost:8888/activation.php?log='.urlencode($user).'&cle='.urlencode($key).'


    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre.';


    mail($destinataire, $sujet, $message, $entete) ;
}

function ValidateKey(){
    $user = $_GET['log'];
    $key = $_GET['cle'];
    
    if($stmt->execute(array(':login' => $login)) && $row = $stmt->fetch())
      {
        $clebdd = $row['cle'];	// Récupération de la clé
        $actif = $row['actif']; // $actif contiendra alors 0 ou 1
      }


    // On teste la valeur de la variable $actif récupéré dans la BDD
    if($actif == '1') // Si le compte est déjà actif on prévient
      {
         echo "Votre compte est déjà actif !";
      }
    else // Si ce n'est pas le cas on passe aux comparaisons
      {
         if($cle == $clebdd) // On compare nos deux clés	
           {
              // Si elles correspondent on active le compte !	
              echo "Votre compte a bien été activé !";

              // La requête qui va passer notre champ actif de 0 à 1
              $stmt = $dbh->prepare("UPDATE user SET validate = 1 WHERE login = :user ");
              $stmt->bindParam(':user', $user);
              $stmt->execute();
           }
         else 
           {
              echo "Erreur ! Votre compte ne peut être activé...";
           }
      }
 
}
// GENERER "cle" 32 char (envois par mail + ajout dans BDD)
// envoyer LIEN+cle
// si clique LIRE cle regarder si cle mail = cle bdd si c'est le cas activer = 1
// Redirection index

//AJOUTER EMPLACEMENT VALIDER = bool / USERKEY = CLE
// CONNECTION VERIFIER SI VALIDER = TRUE SINON ECRIRE VALIDEZ VOTRE COMPTE PAR MAIL SVP
// AJOUTER SI MAIL == MAIL EXISTANT = COMPTE DEJA UTILISER

?> */