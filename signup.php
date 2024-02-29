<style>
    p {
        font-size: 15px;
        font-family: verdana;
    }
</style>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once("require/connection.php");
    require_once("require/guid.php");


    //require_once("insert.php");

    require_once("require/signup-upload.php");

    //echo "Your name is " . $myName;
}
else {
    //echo "<a href=\"login.html\" target =\"_blank\">Please submit a form</a>";
    //-echo "<a href='login.html' target ='_blank'>Please login</a>";
    //-header('Location: login.html');

    require_once("require/signup-form.php");
	exit;
}
?>