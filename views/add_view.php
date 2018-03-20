<?php require_once 'HeaderConnected.php' ?>

<div class="container col-md-6 offset-md-3" style="padding-top: 5%">
    <div class="card-outline-secondary">
        <div class="card card-outline-secondary">
            <div class="card-header">
                <h3 class="mb-0">Add an event</h3>
            </div>
            <div class="card-body">
                <form action="" method="post" class="form" role="form" autocomplete="off" id="loginForm" novalidate="" method="POST">
                    <div class="form-group">
                        <label for="Event name">Event name</label>
                        <input name="lbl" type="text" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="descr" type="text" class="form-control" required="">
                    </div>
                    <label for="Priorityform">Priority</label>
                    <select class="selectpicker" name="priority" id="Priorityform">
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                    </select>
                    <button name="submit" type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?php require_once 'Endbody.php' ?>