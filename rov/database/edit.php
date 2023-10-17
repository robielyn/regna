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
     
   
    } else {
        echo "Error updating user data: " . $stmt->error;
    }
    header("Location: admin.php");
}

// Close the database con
$con->close();
?>