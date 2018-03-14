<?php
function connecttoaccount($bdd, $user, $pwd)
    {
        session_start ();       
        //$pwd = md5($pwd);
        $test = $bdd->prepare('SELECT * FROM user WHERE login = :user and password = :password');
        $test->bindParam(':user', $user);
        $test->bindParam(':password', $pwd);
        $test->execute();
        $inp = $test->fetch(PDO::FETCH_NUM); // a modifier 
        if($inp)
        {
            $_SESSION['id'] = $inp[0]; // 0 is ID
            $_SESSION['user'] = $user;
            header('Location:index.php');
            exit;
        }
        else
        {
            session_unset ();
            session_destroy ();
            echo "Something goes wrong...";
        }
    }
?>