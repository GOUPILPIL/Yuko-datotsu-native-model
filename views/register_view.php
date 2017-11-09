<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>TO DO LIST</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        TO-DO-LIST
        <button id="boutton-display" class="btn btn-success my-2 my-sm-0" type="submit">Connect</button>
    </nav>
    <div id="dmenu" class="container-fluid" style="display: none; position: absolute; z-index:1; padding: 0;">
        <div class="col-md-3 col-12 float-right" style="background-color : azure;">
            <form action="" method="post">
                <div class="form-group">
                    <label for="Addanelement">Connection : </label>
                    <input type="text" class="form-control" name="User" placeholder="Pseudo">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="Pwd" placeholder="Password">
                </div>
                <button type="submit" value="OK" name="submit" class="btn btn-primary">Go !</button>
            </form>
        </div>

    </div>
    <h1 style="text-align: center; padding-bottom : 8%; padding-top: 3%;"> Register form :) </h1>
    <div class="container">
        <form action="" method="post">
            <div class="form-group row">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="registerMail" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group row">
                <label for="example-text-input">Pseudo :</label>
                <input class="form-control" type="text" name="registerUser">
            </div>
            <div class="form-group row">
                <label for="exampleInputPassword1">Password :</label>
                <input type="password" class="form-control" name="registerPwd" placeholder="Password">
            </div>
            <button type="submit" value="OK" name="submitRegister" class="btn btn-primary">Go !</button>
        </form>
    </div>
</body>
