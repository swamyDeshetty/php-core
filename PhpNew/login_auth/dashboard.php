<?php
//include auth_session.php file on all user panel pages
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        // exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now in  user dashboard page and ur name is <?php echo $_SESSION['username'] ?>.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>