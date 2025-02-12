<?php
session_start();

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Dummy validation (Replace with Database Validation)
    if ($email == "user@example.com" && $password == "password") {
        $_SESSION['user'] = $email;
        header("Location: home.php");
        exit();
    } else {t
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Include the navigation bar -->
    <?php 
    $navbarPath = __DIR__ . '/navbar.php';
    if (file_exists($navbarPath)) {
        include $navbarPath;
    } else {
        echo "<p style='color: red; text-align: center;'>Error: Navbar file is missing!</p>";
    }
    ?>

    <div class="container">
        <h2>Login to Facebook</h2>

        <!-- Show error message if login fails -->
        <?php if (!empty($error)) echo "<p style='color: red;'>$error</p>"; ?>

        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <p><a href="signup.php">Create an account</a></p>
    </div>

</body>
</html>
