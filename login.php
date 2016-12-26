<?php

include_once('lib/config.php');
include_once('lib/AuthFunctions.php');
include_once('lib/Functions.php');
include_once('lib/DBConnect.php');

sec_session_start();

$title = "Login";
$user = $_SESSION['username'];

include_once('lib/Include/Base.php');
?>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="card card-block">
                <h3 class="card-title">Login</h3>
                <form action="lib/ProcessLogin.php" method="post" name="login_form">
                    <fieldset class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </fieldset>
                    <input type="button" class="btn btn-primary" value="Login" onclick="formhash(this.form, this.form.password);" />
                </form>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
<?php
include_once('lib/Include/End.php');