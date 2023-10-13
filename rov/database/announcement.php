<?php
if (isset($_POST['submitAnnouncement'])) {
    // Check if the form was submitted

    // Retrieve the announcement text from the form
    $announcementText = $_POST['announcementText'];

    // You can now process or store the $announcementText as needed
    // For this example, we'll just display it on the page.

    // Display the submitted announcement
    echo "<div class='col-xxl-4 col-md-4' style='background-color: #f0f0f0; padding: 20px; border-radius: 10px;'>";
    echo "<h5 class='card-title' style='font-size: 18px; font-weight: bold; margin-bottom: 10px;'>Announcement</h5>";
    echo "<textarea rows='4' cols='50' readonly style='width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;'>$announcementText</textarea>";
    echo "</div>";
}
?>
