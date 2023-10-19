<?php
include_once("../include/headers.php");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$selected_user = null; // Initialize an empty variable to store the selected user data

if (isset($_POST['update'])) {
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

    if ($conn->query($update_sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Record has been updated successfully.";
        } else {
            echo "No changes made to the record.";
        }
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center><h1>List of Users</h1>";
    echo "<table border='1'>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Gender</th><th>Address</th><th>Email</th><th>Password</th><th>Role</th><th>Status</th><th>Action</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<center><tr>";
        echo "<td>" . $row["firstname"] . "</td>";
        echo "<td>" . $row["lastname"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["role"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td><button onclick='update(" . $row["id"] . ")'>UPDATE</button></td>";
        echo "</tr>";

        // Add hidden fields with user data
        echo '<input type="hidden" name="firstname_' . $row["id"] . '" value="' . $row["firstname"] . '">';
    echo '<input type="hidden" name="lastname_' . $row["id"] . '" value="' . $row["lastname"] . '">';
    echo '<input type="hidden" name="gender_' . $row["id"] . '" value="' . $row["gender"] . '">';
    echo '<input type="hidden" name="address_' . $row["id"] . '" value="' . $row["address"] . '">';
    echo '<input type="hidden" name="email_' . $row["id"] . '" value="' . $row["email"] . '">';
    echo '<input type="hidden" name="password_' . $row["id"] . '" value="' . $row["password"] . '">';
    echo '<input type="hidden" name="role_' . $row["id"] . '" value="' . $row["role"] . '">';
    echo '<input type="hidden" name="status_' . $row["id"] . '" value="' . $row["status"] . '">';
    }

    echo "</table>";
    echo "";
} else {
    echo "No users found.";
}
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
           background-image:url("https://media.licdn.com/dms/image/D4E12AQELsDE49p-nFQ/article-cover_image-shrink_720_1280/0/1681300526383?e=2147483647&v=beta&t=PUuSre-ZxRh3s4xlVnABslKwvlLDaRqGt-1Mmmbt5Hc");
           background-position: center;
           background-size: cover;
           background-repeat: no-repeat;
        }
        

        center {
            text-align: center;
            margin-top: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin: 30px auto;
            background-color: #fff;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.9);
           
        }

        th, td {
            padding: 10px;
            text-align: left;
           
        }

        th {
            background-color: #9400FF;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #9400FF;
            font-weight: bold;
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        a:hover {
            color: #6200EA;
        }
    </style>
    <center>
    <div class="container">
    <div id="editForm" style="display: none;">
        <h2>Edit User</h2>
        <form method="post" action="">

            <input type="hidden" id="edit_id" name="update_id">
            <label>First Name:</label>
            <input type="text" id="new_firstname" name="new_firstname" required value="<?php echo $row['firstname']; ?>"><br>
            <label>Last Name:</label>
            <input type="text" id="new_lastname" name="new_lastname" required value="<?php echo $row['lastname']; ?>"><br>
            <label>Gender:</label>
            <input type="text" id="new_gender" name="new_gender" required value="<?php echo $row['gender']; ?>"><br>
            <label>Address:</label>
            <input type="text" id="new_address" name="new_address" required value="<?php echo $row['address']; ?>"><br>
            <label>Email:</label>
            <input type="text" id="new_email" name="new_email" required value="<?php echo $row['email']; ?>"><br>
            <label>Password:</label>
            <input type="text" id="new_password" name="new_password" required value="<?php echo $row['password']; ?>"><br>
            <label>Role:</label>
            <input type="text" id="new_role" name="new_role" required value="<?php echo $row['role']; ?>"><br>
            <label>Status:</label>
            <input type="text" id="new_status" name="new_status" required value="<?php echo $row['status']; ?>"><br>
            <input type="submit" name="update" value="Update">
        </form>
        
    </div>
    <style>
       
   
    /* CSS styles for the form elements */
    label {
        display: block;
        margin-bottom: 6px;
        font-family: Monospace ;
        font-size: 150%;
        font-weight: bold;
        color:#FBFF00;
    }

    
    .input-container {
            display: inline-block; /* Make it inline-block to fit the content */
            border: 1px solid #ccc;
            border-radius: 3px;
            padding: 20px;
        }
        
     input[type="text"] {
    width: 80%;
    padding: 6px;
    margin-bottom: 10px;
    border: 3px solid #071952;
    border-radius: 5px;
    text-align: center;
    font size: 500px;
    font-family: Ariel ;
    font-weight: bolder;
    
    
   }

    input[type="submit"] {
        background-color: #102C57;
        color: #fff;
        font-family: Helvetica;
        padding: 20px 25px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    } */

  
</style>

    </center>


    <script>
       function update(id) {
    // Display the edit form
    document.getElementById('editForm').style.display = 'block';

    // Set the hidden input's value to the selected user's ID
    document.getElementById('edit_id').value = id;

    // Populate the form fields based on the ID
    var firstname = document.querySelector('input[name="firstname_' + id + '"]').value;
    var lastname = document.querySelector('input[name="lastname_' + id + '"]').value;
    var gender = document.querySelector('input[name="gender_' + id + '"]').value;
    var address = document.querySelector('input[name="address_' + id + '"]').value;
    var email = document.querySelector('input[name="email_' + id + '"]').value;
    var password = document.querySelector('input[name="password_' + id + '"]').value;
    var role = document.querySelector('input[name="role_' + id + '"]').value;
    var status = document.querySelector('input[name="status_' + id + '"]').value;

    console.log('First Name:', firstname);
    console.log('Last Name:', lastname);
    console.log('Gender:', gender);
    console.log('Address:', address);
    console.log('Email:', email);
    console.log('Password:', password);
    console.log('Role:', role);
    console.log('Status:', status);

    // Set form field values
    document.getElementById('new_firstname').value = firstname;
    document.getElementById('new_lastname').value = lastname;
    document.getElementById('new_gender').value = gender;
    document.getElementById('new_address').value = address;
    document.getElementById('new_email').value = email;
    document.getElementById('new_password').value = password;
    document.getElementById('new_role').value = role;
    document.getElementById('new_status').value = status;
}




    </script>

    
</body>
</html>
<?php include_once("../include/footers.php"); ?>