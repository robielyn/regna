<?php
session_start();
include_once("dbconnect.php");
$conn = getConnection();


$email = $_POST["username"];
$password = $_POST["password"];


$sql = "SELECT * FROM users WHERE email = '".$email."' and password = '".$password."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


if (isset($_POST['login'])) {
    if ($row !== null && $row["email"] == $email && $row["password"] == $password) {
        if ($row["role"] == "admin") {
            header("Location: admin.php");
        } 
        else if ($row["role"] == "user") {
            header("Location: user.php");
        }

        $_SESSION["ID"] = $row["id"];
        $_SESSION["Role"] = $row["role"];
    } else {
        echo "<script>alert('Incorrect username or password!')</script>";
    }
}

closeConnection();
?>