<?php
session_start();
include_once("dbconnect.php");
$con = getConnection();


// Update Activity
if (isset($_POST["update_id"])) {
    $id_select = $_POST['update_id'];

    $output = "";

    $sql = "SELECT * FROM activities WHERE id = '" . $id_select . "'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $activityId = $row['id'];
        $activityName = $row['activityName'];
        $location = $row['location'];
        $dateOfActivity = date("Y-m-d", strtotime($row['dateOfActivity'])); // Convert date to MySQL date format
        $timeOfActivity = date("H:i:s", strtotime($row['timeOfActivity'])); // Convert time to MySQL time format
        $ootd = $row['ootd'];
        $remarks = $row['remarks'];



        $output .= "<div class='modal-content' style='margin:7% auto;'>
            <div class='head' style=''>
                <!--<i id='back-show' class='bi bi-arrow-left'></i> -->
                <span class='close' onclick='closeModal()'>&times;</span>
            </div>
            <header>Edit Activity</header>";

        if ($_SESSION['Role'] == 'admin') {
            $output .= "<form action='dashboard.php' method='POST' enctype='multipart/form-data'>";
        } else if ($_SESSION['Role'] == 'user') {
            $output .= "<form action='user.php' method='POST' enctype='multipart/form-data'>";
        }

        $output .= "<!-- Activity Name -->
                <input type='hidden' name='acitivityID' placeholder='Name Activity' class='input' value='" . $activityId . "' >
                <div class='field input-field'>
                    <input type='text' name='nameActivity' placeholder='Name Activity' class='input' value='" . $activityName . "' >
                </div>

                <!-- Activity Location -->
                <div class='field input-field'>
                    <input type='text' name='location' placeholder='Location' class='input' value='" . $location . "' >
                </div>

                <!-- Activity Date & Time -->
                <div class='field input-field' style='display: flex; align-items:center; gap: 20px;'>
                    <div>
                        <label>Date: </label>
                        <input type='date' name='date' placeholder='Date' class='input' value='" . $dateOfActivity . "' >
                    </div>
                    <div>
                        <label>Time: </label>
                        <input type='time' name='time' placeholder='Time' class='input' value='" . $timeOfActivity . "' >
                    </div>
                </div>

                <!-- Activity File OOTD -->
                <div>
                    <label>OOTD: </label>
                    <input type='text' name='ootd' placeholder='OOTD' class='input' value='" . $ootd . "' >
                </div>

                <div class='field input-field'>
                    <label>Remarks: </label>
                    <textarea type='text' name='remarks' placeholder='....'> $remarks </textarea>
                </div>

                <div class='field button-field'>
                    <input type='submit' class='addActivity' id='submitBtn' name='updateActivity' value='Update'>
                </div>
            </form>
        </div>";
    }

    echo $output;
}


// Delete Activity

if (isset($_POST["delete_id"])) {
    $id_select = $_POST['delete_id'];

    $output = "";

    $sql = "DELETE FROM activities WHERE id = '" . $id_select . "'";
    $result = $con->query($sql);

    if ($result) {
        $output .= "<div class='modal-content' style='margin:7% auto;'>
                    <div class='head'>
                        <span class='close' onclick='closeModal()'>&times;</span>
                    <div>
                        <header>Delete Activity</header>
                        <p style='text-align:center;'>Activity deleted successfully.</p>
                    </div>
                    </div>";
    } else {
        $output .= "<div class='modal-content' style='margin:7% auto;'>
                    <div class='head'>
                    <span class='close' onclick='closeModal()'>&times;</span>
                    </div>
                    <header>Delete Activity</header>
                    <p>Failed to delete activity.</p>
                 </div>";
    }

    echo $output;
}

// Remarks
if (isset($_POST["set_act"])) {
    $id_select = $_POST['set_act'];

    $output = "";

    $sql = "SELECT * FROM activities WHERE id = '" . $id_select . "'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $remarks = $row['remarks'];


        $output .= "<div class='modal-content' style='padding:20px; padding-bottom: 5px;'>
            <span class='close'>&times;</span>
            <header>Add Remarks</header>
            <form action='user.php' method='POST'>
                <div class='modal-body'>

                <div class='field input-field'>
                    <strong>Activity name:</strong>
                    <h4 style='padding:5px; display:flex; align-items:center;'><i class='bi bi-dot'></i>
                    " . $row['activityName'] . "</h4>
                </div>

                    <input type='hidden' id='remarksInput' name='activityId' value = " . $row['id'] . ">
                    <div class='field input-field'>
                        <label>Remarks: </label>
                        <textarea type='text' name='remarks' placeholder='Location'> $remarks </textarea>
                    </div>

                </div>
                <div class='modal-footer'>
                    <button class='btn btn-primary' id='cancelRemarks'>Cancel</button>
                    <button class='btn btn-primary' name='addRemarks'>Done</button>
                </div>
             </form>
        </div>";



    }

    echo $output;

}


if (isset($_POST["manage"])) {
    $id_select = $_POST['manage'];

    $output = "";

    $sql = "SELECT * FROM user WHERE id = '" . $id_select . "'";
    $result = $con->query($sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();


        $activityId = $row['ID'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        // $profileImg = $row['profileImg']


        $output .=
            "<div class='modal-content'>
            <div class='head'>
                <span class='close' onclick=''>&times;</span>
            </div>
            <header>Manage User</header>

            <div class='userName' style='text-align:center;'>
                <div class='user-profile' style='display:flex; align-items:center; justify-content: center;'>
                    <img src='../act-img/profile-img.jpg' alt=' style='border-radius:50%;'>
                </div>
                <h5 style='padding:10px;'>" . $firstName . " " . $lastName . "</h5>
            </div>

            <div class='container d-grid gap-2'>
            <button id='viewAccount' class='btn btn-primary'>View Account</button>
            <button id='editAccount' class='btn btn-primary'>Edit Account</button>
            <button class='btn btn-secondary'>Cancel</button>
        </div>
        </div>";
    }
    echo $output;
}



?>
<script>
    // Event delegation for cancel button
    document.addEventListener('click', (event) => {
        if (event.target && event.target.matches('#cancelRemarks')) {
            event.preventDefault();
            const remarksModal = document.getElementById("addRemarksModal");
            remarksModal.style.display = 'none';
        }
        else if (event.target && event.target.matches('#cancelRemarks')) {

        }

    });


    function redirect() {
        var buttons = document.querySelectorAll('.container button');
        var close = document.querySelector('.close');
        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.id === 'viewAccount') {
                    window.location = 'viewAccount.php?id=' + <?php echo $activityId ?>
                } else if (btn.id === 'editAccount') {
                    window.location = 'editAccount.php?id=' + <?php echo $activityId ?>
                } else {
                    document.getElementById('manageModal').style.display = 'none';
                }

            })
        });
        close.addEventListener('click', () => {
            document.getElementById('manageModal').style.display = 'none';
        })
    }
    redirect();


</script>