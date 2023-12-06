<?php
if (isset($_POST['name'])) {
    setcookie('name', $_POST['name']);
}
if (isset($_POST['name'])) {
    echo '<p>Hello ' . $_POST['name'];
} else {
    if (isset($_COOKIE['name'])) {
        echo '<p>Hello ' . $_COOKIE['name'];
    }
}
// setcookie ("name", "", time() - 1); --> Delete Cookie
?>
<form method="POST">
    <input type="text" name="name" />
    <input type="submit" />
</form>