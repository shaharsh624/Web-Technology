<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Display submitted data
        echo "<p>Name: " . htmlspecialchars($_POST["name"]) . "</p>";
        echo "<p>Gender: " . htmlspecialchars($_POST["gender"]) . "</p>";
        echo "<p>Operating System: " . htmlspecialchars($_POST["os"]) . "</p>";

        if (isset($_POST["toy"])) {
            echo "<p>Toys: " . implode(", ", $_POST["toy"]) . "</p>";
        }

        // You can display other form fields in a similar way

        echo "<p>Mini Biography: " . htmlspecialchars($_POST["bio"]) . "</p>";
    }
    ?>