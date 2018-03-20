<?php
/**
 * Created by PhpStorm.
 * User: Zephor
 * Date: 3/19/18
 * Time: 2:57 PM
 */?>

<?php include('Header.php') ?>

<div class="container col-md-6 offset-md-3" style="padding-top: 5%">
    <div class="card-outline-secondary">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Login</h3>
            </div>
            <div class="card-body">
                <form action="" method="post" class="form" role="form" autocomplete="off" id="loginForm" novalidate="" method="POST">
                    <div class="form-group">
                        <label for="uname1">Username</label>
                        <input name="User" type="text" class="form-control" name="uname1" id="uname1" required="">
                        <div class="invalid-feedback">Please enter your username or email</div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="Pwd" type="password" class="form-control" id="pwd1" required="" autocomplete="new-password">
                        <div class="invalid-feedback">Please enter a password</div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include('Endbody.php') ?>
