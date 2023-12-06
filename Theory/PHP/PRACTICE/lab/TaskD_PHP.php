<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Form</title>
<link rel="stylesheet" href="TaskD_CSS.css">
<script src="TaskD_JS.js"></script>
</head>
<body>

<div class="form-container">
    <form name="registrationForm" action="" method="post">
        <h2>Registration Form</h2>
        <p>Please fill out the form below to register for our site. Fields with bold labels are required.</p>
        
        <label for="name"><strong>Name</strong></label>
        <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"><br><br>
        
        <label><strong>Gender</strong></label>
        <input type="radio" name="gender" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] === "male") ? 'checked' : ''; ?>> Male
        <input type="radio" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] === "female") ? 'checked' : ''; ?>> Female<br><br>
        
        <label for="os"><strong>Operating System</strong></label>
        <select id="os" name="os">
            <option value="Windows" <?php echo (isset($_POST['os']) && $_POST['os'] === "Windows") ? 'selected' : ''; ?>>Windows</option>
            <option value="MacOS" <?php echo (isset($_POST['os']) && $_POST['os'] === "MacOS") ? 'selected' : ''; ?>>MacOS</option>
            <option value="Linux" <?php echo (isset($_POST['os']) && $_POST['os'] === "Linux") ? 'selected' : ''; ?>>Linux</option>
        </select><br><br>
        
        <label><strong>Toys</strong></label>
        <input type="checkbox" name="toys[]" value="Digital Camera" <?php echo (isset($_POST['toys']) && in_array("Digital Camera", $_POST['toys'])) ? 'checked' : ''; ?>> Digital Camera
        <input type="checkbox" name="toys[]" value="MP3 Player" <?php echo (isset($_POST['toys']) && in_array("MP3 Player", $_POST['toys'])) ? 'checked' : ''; ?>> MP3 Player
        <input type="checkbox" name="toys[]" value="Wireless LAN" <?php echo (isset($_POST['toys']) && in_array("Wireless LAN", $_POST['toys'])) ? 'checked' : ''; ?>> Wireless LAN<br><br>
        
        <label for="bio"><strong>Mini Biography</strong></label>
        <textarea id="bio" name="bio"><?php echo isset($_POST['bio']) ? $_POST['bio'] : ''; ?></textarea><br><br>
        
        <input type="submit" value="Register">
    </form>
</div>

<?php
// Initialize an array to hold error messages
$errors = [];

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST['name'])) {
        $errors[] = "You must enter a name.";
    }

    // Validate gender
    if (empty($_POST['gender'])) {
        $errors[] = "You must choose a gender.";
    }

    // ... include other validations as necessary ...

    // If there are no errors, print the submitted data
    if (count($errors) == 0) {
        echo "<h2>Your Input:</h2>";
        echo "Name: " . htmlspecialchars($_POST['name']) . "<br>";
        echo "Gender: " . htmlspecialchars($_POST['gender']) . "<br>";
        echo "Operating System: " . htmlspecialchars($_POST['os']) . "<br>";
        echo "Toys: " . implode(", ", $_POST['toys'] ?? []) . "<br>"; // Use null coalescing operator to avoid undefined index notice
        echo "Mini Biography: " . htmlspecialchars($_POST['bio']);
    } else {
        // If there are errors, print them out as a JavaScript alert
        echo "<script>alert('Please correct the following errors:\\n" . implode("\\n", $errors) . "');</script>";
    }
}
?>


