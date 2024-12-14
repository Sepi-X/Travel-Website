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

// Handle form submissions (example for packages)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_package'])) {
        $name = $_POST['package_name'];
        $description = $_POST['package_description'];
        

        $sql = "INSERT INTO packages (name, description) VALUES ('$name', '$description')";
        if ($conn->query($sql)) {
            $successMessage = "Package added successfully!";
        } else {
            $errorMessage = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
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
            <h2>Manage Packages</h2>
            <form action="admin_dashboard.php" method="post" class="form">
                <label for="package_name">Package Name:</label>
                <input type="text" id="package_name" name="package_name" required>

                <label for="package_description">Description:</label>
                <textarea id="package_description" name="package_description" required></textarea>


                <button type="submit" name="add_package">Add Package</button>
            </form>
        </section>

        <section>
            <h2>Site Settings</h2>
            <a href="site_settings.php" class="btn">Edit Site Settings</a>
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