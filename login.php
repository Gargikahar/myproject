<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
        if ($email === $_COOKIE['email'] && $password === $_COOKIE['password']) {
            $_SESSION['email'] = $email;
            header("Location: welcome.php");
            exit();
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "No user found. Please register first.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <form method="POST">
        <fieldset style="width:20rem;">
            <legend>Login</legend>
            <label>Email Id</label><br>
            <input type="email" name="email" required><br><br>

            <label>Password</label><br>
            <input type="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </fieldset>
    </form>
</body>
</html>
