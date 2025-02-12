<?php
session_start();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $dob = trim($_POST['dob']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Basic validation
    if (empty($name) || empty($dob) || empty($gender) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "All fields are required!";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } else {
        // In a real app, store this in a database (not just session)
        $_SESSION['registered_user'] = [
            'name' => $name,
            'dob' => $dob,
            'gender' => $gender,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT) // Hash password for security
        ];
        
        // Success message
        $success = "Account created successfully! You can now <a href='login.php'>login</a>.";
        
        // Redirect to avoid resubmission
        header("Location: signup.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account | Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="container">
        <h2>Create a New Account</h2>

        <!-- Show success or error messages -->
        <?php if (!empty($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <?php if (!empty($success)) echo "<p style='color: green;'>$success</p>"; ?>

        <form method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="date" name="dob" required>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Sign Up</button>
        </form>

        <p>Already have an account? <a href="index.php">Login</a></p>
    </div>

</body>
</html>
