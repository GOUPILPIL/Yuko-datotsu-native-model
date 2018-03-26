<?php
/**
 * Created by PhpStorm.
 * User: Zephor
 * Date: 3/19/18
 * Time: 2:14 PM
 */ ?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Yuko-Datotsu</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-beta.1/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <a href="/jaroflife/index.php" class="navbar-brand">Yuko datotsu</a>
    <div class="d-flex flex-row order-2 order-lg-3 ml-auto">
        <ul class="navbar-nav flex-row">
            <li class="nav-item"><a class="nav-link px-2" href="https://twitter.com/GoupilBuchou"><span class="fa fa-twitter"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2" href="https://www.linkedin.com/in/victor-buchou-587421150/"><span class="fa fa-linkedin"></span></a></li>
            <li class="nav-item"><a class="nav-link px-2" href="https://github.com/GOUPILPIL"><span class="fa fa-github"></span></a></li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar4">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./list.php">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Club</a>
            </li>
        </ul>
            <button class="btn btn-outline-success my-2 " style="margin-right: 10px;">Welcome <?php echo $_SESSION['user']; ?></button>
        <a href="./add.php">
            <button class="btn btn-outline-primary my-2 " style="margin-right: 10px;" type="submit">Add a new event</button>
        </a>

        <a href="./delete.php">
            <button class="btn btn-outline-danger my-2 " type="submit">Disconnect</button>
        </a>
    </div>
</nav>
