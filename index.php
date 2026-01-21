<?php
session_start();
$userLoggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>University Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ===== HEADER ===== -->
<header>
    <h1>University Management System</h1>
 
    <nav>
        <a href="index.php" class=active>Home</a>
        <a href="students.html">Students</a>
        <a href="teachers.html">Teachers</a>
        <a href="courses.html">Courses</a>
        <a href="results.html">Results</a>
        <?php if ($userLoggedIn): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="auth/logout.php">Logout</a>
        <?php else: ?>
            <a href="auth/login.php">Login</a>
        <?php endif; ?>
    </nav>
</header>

<!-- ===== HERO SECTION ===== -->
<section class="hero">
    <h2>Welcome to University Portal</h2>
    <p>
        Manage students, teachers, courses, and results efficiently
        using a secure database-driven system.
    </p>

    <?php if (!$userLoggedIn): ?>
        <a href="auth/login.php">
            <button>Login to Continue</button>
        </a>
    <?php endif; ?>
</section>

<!-- ===== FEATURES ===== -->
<section class="features">
    <div class="card">
        <h3>Student Management</h3>
        <p>Add, update and manage student records.</p>
    </div>

    <div class="card">
        <h3>Course Management</h3>
        <p>Assign courses to departments and teachers.</p>
    </div>

    <div class="card">
        <h3>Result System</h3>
        <p>Automated GPA & grade calculation.</p>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
    <p>© 2026 University Management System</p>
</footer>

</body>
</html>
