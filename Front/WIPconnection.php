<?php
/**
 * Created by PhpStorm.
 * User: Zephor
 * Date: 3/16/18
 * Time: 3:08 PM
 */ ?>
<?php include('Header.php') ?>

<div class="container col-md-6 offset-md-3" style="padding-top: 5%">
    <div class="card-outline-secondary">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Login</h3>
            </div>
            <div class="card-body">
                <form class="form" role="form" autocomplete="off" id="loginForm" novalidate="" method="POST">
                    <div class="form-group">
                        <label for="uname1">Username</label>
                        <input type="text" class="form-control" name="uname1" id="uname1" required="">
                        <div class="invalid-feedback">Please enter your username or email</div>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="pwd1" required="" autocomplete="new-password">
                        <div class="invalid-feedback">Please enter a password</div>
                    </div>
                    <div class="form-check small">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"> <span>Remember me on this computer</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php include('Endbody.php') ?>

<!--
 <form class="form-inline ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Username" aria-label="Search">
        <input class="form-control mr-sm-2" type="search" placeholder="Password" aria-label="Search">
        <div class="btn-toolbar">
        <button class="btn btn-outline-success my-2 my-sm-0" style="margin-right: 10px;" type="submit">Connect</button>
        <button class="btn btn-outline-success my-2 my-sm-0" type="Register">Register</button>
        </div>
    </form>



<div class="card card-outline-secondary col-12 col-md-6">
<div class="card card-outline-secondary">
    <div class="card-header">
        <h3 class="mb-0">Login</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off" id="loginForm" novalidate="" method="POST">
            <div class="form-group">
                <label for="uname1">Username</label>
                <input type="text" class="form-control" name="uname1" id="uname1" required="">
                <div class="invalid-feedback">Please enter your username or email</div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="pwd1" required="" autocomplete="new-password">
                <div class="invalid-feedback">Please enter a password</div>
            </div>
            <div class="form-check small">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input"> <span>Remember me on this computer</span>
                </label>
            </div>
            <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
        </form>
    </div>

</div>
</div>
-->
