<?php
include_once 'config/init.php';

$template = new Template('templates/login-view.php');

if (@$_GET['error']==1){
    echo "<div class='alert error'>incorrect login or password</div>";
}

if (isset($_POST['submit']) AND $_POST['submit'] == "login" ) {

      try{
        $username  = $_POST['username'];
        $password  = $_POST['password'];
        $login = new Login($username, $password);

        if (!$login->is_loggedin()) {
            header('Location: login.php?error=1');
        }

    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
}
echo $template;
?>
