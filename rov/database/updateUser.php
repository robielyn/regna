<?php
include_once('dbconnect.php');
$conn = getConnection();

// $selected_user = null; // Initialize an empty variable to store the selected user data

// if (isset($_POST['update'])) {
    $id_to_update = $_POST['update_id'];
    $new_firstname = $_POST['new_firstname'];
    $new_lastname = $_POST['new_lastname'];
    $new_gender = $_POST['new_gender'];
    $new_address = $_POST['new_address'];
    $new_email = $_POST['new_email'];
    $new_password = $_POST['new_password'];
    $new_role = $_POST['new_role'];
    $new_status = $_POST['new_status']; 

    $update_sql = "UPDATE users SET firstname='$new_firstname', lastname='$new_lastname',gender='$new_gender' ,address='$new_address', email='$new_email', password='$new_password', role='$new_role', status='$new_status'WHERE id='$id_to_update'";

    if (mysqli_query($conn, $update_sql)) {
        header('Location: ../forms/dist/index.php');
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
      
      
// }

?>