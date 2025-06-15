<?php
session_start();
$_SESSION = [];
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logged Out</title>
</head>
<body>
    <h2>You have been logged out.</h2>
    <p><a href="login.php">Click here to login again</a></p>
</body>
</html>
