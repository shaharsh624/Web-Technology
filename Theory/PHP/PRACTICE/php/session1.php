<?php
session_start();
?>
<html>

<body>
    <?php
    $_SESSION["user"] = "Sachin";
    echo "Session information are set successfully.<br/>";
    echo "<br>" . session_id() . "<br>";
    // session_destroy(); --> Destroys complete session
    // session_unset(); --> Destroys variables only
    // unset($_SESSION["user"]); --> Destroys 'user' variable

    ?>
    <a href="session2.php">Visit next page</a>
</body>

</html>