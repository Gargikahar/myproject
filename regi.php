<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Save email and password in cookies for 1 day
    setcookie('email', $email, time() + 86400, "/");
    setcookie('password', $password, time() + 86400, "/");

    $success = "Registration successful. <a href='login.php'>Login Here</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form method="POST">
        <fieldset style="width:20rem;">
            <legend>Registration Form</legend>
            <label>Email Id</label><br>
            <input type="email" name="email" required><br><br>

            <label>Password</label><br>
            <input type="password" name="password" required><br><br>

            <input type="submit" value="Register">
        </fieldset>
    </form>

    <?php if (!empty($success)) echo "<p style='color:green;'>$success</p>"; ?>
</body>
</html>
