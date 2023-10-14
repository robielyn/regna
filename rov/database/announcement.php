<?php

include_once('dbconnect.php');
$conn = getConnection();

$announcementText = $_POST['announcementText'];

$sql = "INSERT INTO announcements(text)
VALUES('$announcementText')";

if (mysqli_query($conn, $sql)) {
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

closeConnection($conn);
?>
