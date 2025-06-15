<?php
require_once 'auth.php';
requireRole('admin');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Secure Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1>Welcome Admin, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>You have administrative access.</p>
        <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
