<nav class="navbar">
    <div class="nav-left">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="posts.php">Posts</a>
    </div>
    <div class="nav-right">
        <a href="signup.php">Sign Up</a>
        <a href="index.php">Login</a>
    </div>
</nav>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background-color: #3b5998;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        margin: 0 15px;
        font-size: 18px;
    }

    .navbar a:hover {
        text-decoration: underline;
    }
</style>
