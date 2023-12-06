<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>Document</title>
</head>

<body>
    <div class="container"></div>
    This is my php practice site
    <p>
        <?php
        // Single Comment
        /* Multi
        Line
        Comment */
        echo "Hello World";
        echo "<br>";
        $var1 = 35;
        $var2 = 52;
        echo "a = " . $var1;
        echo "<br>";
        echo "b = " . $var2;

        echo "<br>";

        echo $var1, " + ", $var2, " = ", $var1 + $var2;

        echo "<br>";

        $var3 = $var1 + $var2;

        echo var_dump($var3);

        echo "<br>";

        if ($var3 % 2 == 0) {
            echo "Even number";
        } else {
            echo "Odd Number";
        }

        echo "<br><h4>For Loops</h4>";

        for ($i = 1; $i <= 10; $i++) {
            echo "$i ";
        }

        $list = [];
        $list[0] = "Hello";

        echo "<br><h4>Arrays</h4>";

        echo "$list[0] <br>";
        $list = array("Hii", "My", "Name", "is", "Harsh");

        for ($i = 0; $i < count($list); $i++) {
            echo "$list[$i], ";
        }

        echo "<br>";

        $list = array(5, 6, 7, 8, 9, 0, 1);

        for ($i = 0; $i < count($list); $i++) {
            echo "$list[$i], ";
        }

        echo "<br>";

        $list1 = [3, 4];

        for ($i = 0; $i < count($list1); $i++) {
            echo "$list1[$i], ";
        }

        echo "<br>";
        $list1[] = 5;

        array_unshift($list1, 'a');

        echo "<br>";

        for ($i = 0; $i < count($list1); $i++) {
            echo var_dump($list1[$i]), ", ";
        }


        echo "<br>";

        for ($i = 0; $i < count($list1); $i++) {
            echo "$list1[$i], ";
        }

        echo "<br>";

        $age = 17;
        switch ($age) {
            case 15:
                echo 'You are 15';
                break;
            case 16:
                echo 'You are 16';
                break;
            case 17:
                echo 'You are 17';
                break;
            case 18:
                echo 'You are 18';
                break;
            default:
                echo "You are $age";
        }

        echo "<br>";
        $list = ['a', 'b', 'c'];
        foreach ($list as $value) {
            echo $value, " ";
        }

        echo "<br>";

        function sendEmail($to)
        {
            echo "send an email to $to";
        }

        sendEmail('harsh.sce21@sot.pdpu.ac.in');

        echo "<br>";

        function sendingEmail($to)
        {
            return true;
        }
        $success = sendingEmail('test@test.com');
        if ($success) {
            echo 'email sent successfully';
        } else {
            echo 'error sending the email';
        }








        ?>
    </p>
</body>

</html>