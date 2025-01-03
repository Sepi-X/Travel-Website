<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php'); // Redirect to login page if not logged in
    exit;
}

// Database connection
$host = 'mysql';
$user = 'SEPEHR';
$password = 'root';
$db = 'travel';
$conn = mysqli_connect($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin-pages.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Admin Dashboard</h1>
        <p>Welcome, Admin!</p>
        
        <?php if (isset($successMessage)): ?>
            <div class="success"><?php echo $successMessage; ?></div>
        <?php endif; ?>
        
        <?php if (isset($errorMessage)): ?>
            <div class="error"><?php echo $errorMessage; ?></div>
        <?php endif; ?>

        <section>
            <h2>Manage Bookings</h2>
            <a href="manage_bookings.php" class="btn">View and Edit Bookings</a>
        </section>

        <section>
            <h2>Manage Users</h2>
            <a href="manage_users.php" class="btn">View and Edit Users</a>
        </section>




        <section>
            <h2>Logout</h2>
            <a href="admin_logout.php" class="btn logout-btn">Logout</a>
        </section>
    </div>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
