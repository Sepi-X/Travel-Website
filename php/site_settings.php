<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
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

// Fetch current settings
$sql = "SELECT * FROM site_settings LIMIT 1"; // Assuming settings are stored in a table
$result = $conn->query($sql);
$settings = $result->fetch_assoc();

// Handle form submission to update settings
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $site_title = $_POST['site_title'];
    $site_description = $_POST['site_description'];
    $contact_email = $_POST['contact_email'];
    
    $update_sql = "UPDATE site_settings SET 
                    site_title = ?, 
                    site_description = ?, 
                    contact_email = ? 
                    WHERE id = 1";
                    
    if ($stmt = $conn->prepare($update_sql)) {
        $stmt->bind_param("sss", $site_title, $site_description, $contact_email);
        if ($stmt->execute()) {
            $successMessage = "Settings updated successfully!";
        } else {
            $errorMessage = "Error updating settings.";
        }
        $stmt->close();
    } else {
        $errorMessage = "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Settings - Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="settings-container">
        <h1>Site Settings</h1>
        
        <?php if (isset($successMessage)): ?>
            <div class="success"><?php echo $successMessage; ?></div>
        <?php endif; ?>
        
        <?php if (isset($errorMessage)): ?>
            <div class="error"><?php echo $errorMessage; ?></div>
        <?php endif; ?>

        <form action="site_settings.php" method="POST">
            <label for="site_title">Site Title:</label>
            <input type="text" id="site_title" name="site_title" value="<?php echo htmlspecialchars($settings['site_title']); ?>" required>
            
            <label for="site_description">Site Description:</label>
            <textarea id="site_description" name="site_description" required><?php echo htmlspecialchars($settings['site_description']); ?></textarea>
            
            <label for="contact_email">Contact Email:</label>
            <input type="email" id="contact_email" name="contact_email" value="<?php echo htmlspecialchars($settings['contact_email']); ?>" required>
            
            <button type="submit" class="btn">Update Settings</button>
        </form>

        <section>
            <h2>Logout</h2>
            <a href="admin_logout.php" class="btn logout-btn">Logout</a>
        </section>
    </div>
</body>
</html>