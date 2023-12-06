<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username_return = "";
    $password_return = "";
    if (empty($username)) {
        $username_return = "Please enter the username!";
    } else {
        $username_return = $username;
    }

    if (empty($password)) {
        $password_return = "Please enter the password!";
    } else {
        $password_return = $password;
    }
}
?>

<span>
    <?php if (isset($username_return)) {
        echo "Username: ", $username_return;
    } ?>
</span>
<br>
<span>
    <?php if (isset($password_return)) {
        echo "Password: ", $password_return;
    } ?>
</span>