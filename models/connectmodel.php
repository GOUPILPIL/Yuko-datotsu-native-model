<?php
function connecttoaccount($bdd){
    if (isset($_POST['User'], $_POST['Pwd'])) {
            session_start ();
            $user = htmlspecialchars($_POST['User']);
            $pwd = htmlspecialchars($_POST['Pwd']);
            //$pwd = md5($pwd);
            $test = $bdd->prepare('SELECT * FROM user WHERE login = :user and password = :password');
            $test->bindParam(':user', $user);
            $test->bindParam(':password', $pwd);
            $test->execute();
            $inp = $test->fetch(PDO::FETCH_NUM);
            if($inp)
            {
                $_SESSION['id'] = $inp[0]; // 0 is ID
                $_SESSION['user'] = $_POST['User'];
                header('Location:index.php');
                exit;
            }
            else
            {
                session_unset ();
                session_destroy ();
                echo "Something go wrong...";
            }
        }
      }
?>