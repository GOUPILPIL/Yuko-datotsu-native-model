<?php include('Header.php') ?>
    <div class="container col-md-6 offset-md-3" style="padding-top: 5%">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Sign Up</h3>
            </div>
            <div class="card-body">
                <form  action="" method="post" class="form" role="form" autocomplete="off">
                    <div class="form-group">
                        <label for="inputName">Username :</label>
                        <input type="text" class="form-control" name="registerUser" id="inputName" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3">Email</label>
                        <input type="email" class="form-control"  name="registerMail" id="inputEmail3" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3">Password</label>
                        <input type="password" class="form-control" name="registerPwd" id="inputPassword3" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdPATgUAAAAAHfstvviunA3WrSMVVNTHaAsHX85"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submitRegister" class="btn btn-success btn-lg float-right">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include('Endbody.php') ?>
