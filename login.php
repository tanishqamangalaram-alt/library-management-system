<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <!-- Show messages using GET params -->
        <?php
        if(isset($_GET['error'])){
            echo "<div class='error'>".$_GET['error']."</div>";
        }
        if(isset($_GET['success'])){
            echo "<div class='success'>".$_GET['success']."</div>";
        }
        ?>

        <form method="POST" action="login_process.php">
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
