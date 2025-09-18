<?php
session_start();

if (!isset($_SESSION["userid"]) || $_SESSION["userid"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome <?php echo $_SESSION["name"]; ?></title>
</head>

<body>
    <div>
        <div>
            <div>
                <h1>Hello, <strong><?php echo $_SESSION["name"]; ?></strong>. Welcome to demo site.</h1>
            </div>
            <p>
                <a href="logout.php" role="button" aria-pressed="true">Log Out</a>
            </p>
        </div>
    </div>
</body>

</html>