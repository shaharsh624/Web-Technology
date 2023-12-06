<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>PHP Form Validation</title>
</head>

<body>
    <form method="POST" action="formValidate2.php">
        <table>
            <tr>
                <td>Name:</td>
                <td> <input type="text" name="username" /></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td> <input type="password" name="password" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="login" /> </td>
            </tr>
        </table>

    </form>
</body>

</html>