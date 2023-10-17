<?php
include_once('admin-header.php');

$con =   getConnection();
// Check if the user ID is provided in the query parameter
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Retrieve user data by ID from the database
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        } else {
            die("User not found.");
        }
    } else {
        die("Error fetching user data: " . $stmt->error);
    }
} else {
    die("User ID not provided.");
}

// Handle form submission for updating user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newFirstName = $_POST["new_first_name"];
    $newLastName = $_POST["new_last_name"];
    $newGender = $_POST["new_gender"];
    $newAddress = $_POST["new_address"];
    $newEmail = $_POST["new_email"];
    $newRole = $_POST["new_role"];
    $newStatus = $_POST["new_status"];

    // Update user data in the database
    $sql = "UPDATE users SET firstname=?, lastname=?, gender=?, address=?, email=?, role=?, status=? WHERE id=?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssssssi", $newFirstName, $newLastName, $newGender, $newAddress, $newEmail, $newRole, $newStatus, $userId);

    if ($stmt->execute()) {
        echo "<script> window.location.href = 'admin.php' </script>";
    } else {
        echo "Error updating user data: " . $stmt->error;
    }
}

// Close the database con
$con->close();
?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="user.php">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link " href="userActivities.php" style='background: transparent;'>
                <i class="bi bi-activity"></i>
                <span>Activities</span>
            </a>
        </li>


        <li class="nav-heading" style='color: black;'>Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

    </ul>

</aside><!-- End Sidebar-->


<main id="main" class="main" style='margin-top:60px;'>






<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            color: #005B41;
            font-family: sans-serif;
            font-weight: bold;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #CEDEBD;
            border: 0px solid #001C30;
            border-radius: 5px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #005B41;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50; /* Green color for the update button */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049; /* Slightly darker green on hover */
        }
    </style>
    <title>Edit User</title>
</head>
<body>
<h2>EDIT USERS</h2>
<form method="post">
    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
    <label for="new_first_name">First Name:</label>
    <input type="text" name="new_first_name" value="<?php echo $user['firstname']; ?>" required><br>

    <label for="new_last_name">Last Name:</label>
    <input type="text" name="new_last_name" value="<?php echo $user['lastname']; ?>" required><br>

    <!-- Gender dropdown -->
    <label for="new_gender">Gender:</label>
    <select name="new_gender">
        <option value="Male" <?php if ($user['gender'] === 'Male') echo 'selected'; ?>>Male</option>
        <option value="Female" <?php if ($user['gender'] === 'Female') echo 'selected'; ?>>Female</option>
        <option value="Other" <?php if ($user['gender'] === 'Other') echo 'selected'; ?>>Other</option>
    </select><br>

    <label for="new_address">Address:</label>
    <input type="text" name="new_address" value="<?php echo $user['address']; ?>" required><br>

    <label for="new_email">Email:</label>
    <input type="text" name="new_email" value="<?php echo $user['email']; ?>" required><br>

    <!-- Role dropdown -->
    <label for="new_role">Role:</label>
    <select name="new_role">
        <option value="Admin" <?php if ($user['role'] === 'Admin') echo 'selected'; ?>>Admin</option>
        <option value="User" <?php if ($user['role'] === 'User') echo 'selected'; ?>>User</option>
        <!-- Add more role options as needed -->
    </select><br>

    <!-- Status dropdown -->
    <label for="new_status">Status:</label>
    <select name="new_status">
        <option value="Active" <?php if ($user['status'] === 'Active') echo 'selected'; ?>>Active</option>
        <option value="Not Active" <?php if ($user['status'] === 'Not Active') echo 'selected'; ?>>Not Active</option>
    </select><br>

    <input type="submit" value="Update">
</form>

</body>
</html>
