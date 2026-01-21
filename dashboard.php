<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: auth/login.php");
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h2>Welcome, <?php echo $user['name']; ?></h2>
    <a href="auth/logout.php">Logout</a>
</header>

<section class="hero">
    <p>Role: <?php echo $user['role']; ?></p>
</section>

</body>
</html>
