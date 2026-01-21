<?php
session_start();
include("../config/db.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = hash("sha256", $_POST['password']);

    $sql = "SELECT * FROM users 
            WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user;
        header("Location: ../dashboard.php");
    } else {
        $error = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="form-box">
    <h2>Login</h2>
    <?php if(isset($error)) echo "<p>$error</p>"; ?>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>
</div>

</body>
</html>
