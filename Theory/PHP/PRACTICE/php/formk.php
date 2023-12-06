<html>

<head>
    <title>PHP Form Validation</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $name = $email = $website = $comment = $gender = "";
    $nameErr = $emailErr = $websiteErr = $genderErr = "";
    $val = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Enter your name";
            $val = 1;
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Enter your email address";
            $val = 1;
        } else {
            $email = $_POST["email"];
        }

        if (empty($_POST["website"])) {
            $websiteErr = "Please enter website";
            $val = 1;
        } else {
            $website = $_POST["website"];
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Please enter gender";
            $val = 1;
        } else {
            $gender = $_POST["gender"];
        }
        $comment = $_POST["comment"];
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Form Validation</h2>
    <form action="" method="POST">
        Name:
        <input type="text" name="name"><br><br>
        <span><?php echo "$nameErr"; ?></span>
        Email:
        <input type="email" name="email"><br><br>
        <span><?php echo "$emailErr"; ?></span>
        Website:
        <input type="text" name="website"><br><br>
        <span><?php echo "$emailErr"; ?></span>
        Comment:
        <textarea name="comment" cols="25" rows="4"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="other">Other
        <span><?php echo "$genderErr"; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($val == 0) {
        echo "<h2>Your Input: </h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;

        setcookie($name, "first", time() + 100);
        header("Location: https://www.google.com");
    }
    ?>
</body>

</html>