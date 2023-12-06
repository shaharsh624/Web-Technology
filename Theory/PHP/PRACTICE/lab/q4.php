<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <style>
        form div {
            margin-bottom: 1em;
        }

        div.submit input {
            margin-left: 165px;
        }

        label.field {
            display: block;
            float: left;
            margin-right: 15px;
            width: 150px;
            text-align: right;
        }

        input[type="text"],
        select,
        textarea {
            width: 300px;
            font: 18px Verdana;
            border: solid 2px #666;
            background-color: #ada;
        }

        div.required label.field {
            font-weight: bold;
        }

        div.required input,
        div.required select {
            background-color: #6a6;
            border: solid 2px #000;
            font-weight: bold;
        }

        li {
            font-size: 14pt;
            color: navy;
        }
    </style>
</head>

<body>
    <h1>Registration Form</h1>
    <p>Please fill out the form below to register for our site. Fields with bold labels are required.</p>

    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

        <div class="required">
            <label class="field" for="name">Name</label>
            <input name="name" type="text" />
        </div>

        <div class="required">
            <label class="field">Gender</label>
            <label><input type="radio" name="gender" value="male" />male</label>
            <label><input type="radio" name="gender" value="female" />female</label>
        </div>

        <div class="required">
            <label class="field">Operating System</label>
            <select name="os">
                <option value="windows">Windows</option>
                <option value="macos">Mac OS</option>
                <option value="linux">Linux</option>
                <option value="other">Other ...</option>
            </select>
        </div>

        <div>
            <label class="field">Toys</label>
            <label><input type="checkbox" name="toy[]" value="digicam" /> Digital Camera</label>
            <label><input type="checkbox" name="toy[]" value="mp3" /> MP3 Player</label>
            <label><input type="checkbox" name="toy[]" value="wlan" /> Wireless LAN</label>
        </div>

        <div>
            <label class="field">Portrait</label>
            <input type="file" name="portrait" />
        </div>

        <div>
            <label class="field">Mini Biography</label>
            <textarea name="bio" rows="6" cols="40"></textarea>
        </div>

        <div class="submit">
            <input type="submit" value="Register" />
        </div>
    </form>

    <script>
        function validateForm() {
            var name = document.forms[0]["name"].value;
            var gender = document.forms[0]["gender"].value;
            var os = document.forms[0]["os"].value;

            if (name === "" || gender === undefined || os === "") {
                alert("Please fill out all required fields.");
                return false;
            }

            return true;
        }
    </script>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = array();

        $name = isset($_POST["name"]) ? $_POST["name"] : '';
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
        $toy = isset($_POST["toy"]) ? $_POST["toy"] : '';
        $os = isset($_POST["os"]) ? $_POST["os"] : '';
        $bio = isset($_POST["bio"]) ? $_POST["bio"] : '';

        if (empty($name) || empty($gender) || empty($os) || empty($bio) || empty($toy)) {
            echo "<script>alert('Please fill out all required fields.');</script>";
        } else {
            echo "<h2>Registration Confirmation</h2>";
            echo "<p>Name: " . htmlspecialchars($name) . "</p>";
            echo "<p>Gender: " . htmlspecialchars($gender) . "</p>";
            echo "<p>Operating System: " . htmlspecialchars($os) . "</p>";

            if (isset($_POST["toy"])) {
                echo "<p>Toys: " . implode(", ", $_POST["toy"]) . "</p>";
            }
            if (isset($_FILES["portrait"]) && $_FILES["portrait"]["name"] !== "") {
                echo "<p>Uploaded File: " . htmlspecialchars($_FILES["portrait"]["name"]) . "</p>";
            }
            echo "<p>Mini Biography: " . htmlspecialchars($_POST["bio"]) . "</p>";
        }
    }
    ?>


</body>

</html>