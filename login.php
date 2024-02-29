<style>
    p {
        font-size: 15px;
        font-family: verdana;
    }
</style>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once("require/connection.php");
    $email = $conn->real_escape_string($_POST['your_email']);
    $password = $conn->real_escape_string($_POST['password']);
    require_once("require/login-select.php");

    if (isset($_SESSION['user_email'])) {
        echo "I'm logged in";
        //exit;
    }
    
    else {
        header('Location: index.php');
	    exit;
    }
}
else {
    require_once("require/login-form.php");
	exit;
}

?>