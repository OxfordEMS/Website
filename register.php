<?php

include_once('lib/config.php');
include_once('lib/AuthFunctions.php');
include_once('lib/DBConnect.php');
include_once('lib/Register.php');

$title = "Register";
include_once('lib/Include/Base.php');
?>

    <script type="text/JavaScript" src="assets/js/sha512.js"></script>
    <script type="text/JavaScript" src="assets/js/forms.js"></script>
    <!-- Registration form to be output if the POST variables are not
    set or if the registration script caused an error. -->
    <h1>Register with us</h1>
<?php
if (!empty($error_msg)) {
    echo $error_msg;
}
?>
    <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
        Username: <input type='text' name='username' id='username' /><br>
        Email: <input type="text" name="email" id="email" /><br>
        Password: <input type="password"
                         name="password"
                         id="password"/><br>
        Confirm password: <input type="password"
                                 name="confirmpwd"
                                 id="confirmpwd" /><br>
        <input type="button"
               value="Register"
               onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" />
    </form>
    <p>Return to the <a href="index.php">login page</a>.</p>
<?php
include_once('lib/Include/End.php');