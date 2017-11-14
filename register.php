<?php
    require __DIR__.'/models/model.php';
    require __DIR__.'/models/registermodel.php';
    require __DIR__.'/models/connectmodel.php';
    $bdd = initbdd('todo_project');
    $stmt = $bdd->query('SELECT * FROM user');
    if (isset($_POST['User'], $_POST['Pwd']))
    {
        
        $user = htmlspecialchars($_POST['User']);
        $pwd = htmlspecialchars($_POST['Pwd']);
        connecttoaccount($bdd, $user, $pwd);
    }
    if (isset($_POST['g-recaptcha-response'], $_POST["submitRegister"], $_POST['registerMail'], $_POST['registerUser'], $_POST['registerPwd']))
    {
        $grecaptcharesponse = $_POST['g-recaptcha-response'];
        $state = RecaptchaCheck($grecaptcharesponse);
    if ($state == 1){
        
        $mail = htmlspecialchars($_POST['registerMail']);
        $user = htmlspecialchars($_POST['registerUser']);
        $pwd = htmlspecialchars($_POST['registerPwd']);
        registeraccount($bdd, $user, $mail, $pwd);
        }
    }
    
    require __DIR__.'/views/register_view.php';   
?> 
    