<?php
session_start();
?>
<html>

<body>
    <?php
    echo "User is: " . $_SESSION["user"];
    echo "<br>" . session_id();
    ?>
</body>

</html>