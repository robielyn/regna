<?php include_once('admin-header.php') ?>

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

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="user.php">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">


                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">


                            <div class="card-body">
                                <form action="announcement.php" method="POST">
                                    <div class="col-xxl-4 col-md-4" style=" padding: 20px; border-radius: 10px; width:100%">

                                        <h5 class="card-title" style="font-size: 18px; font-weight: bold; margin-bottom: 10px;">Announcement</h5>

                                        <textarea id="announcementText" name="announcementText" rows="4" cols="50" placeholder="Write your announcement here..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 14px;"></textarea>

                                        <button id="submitAnnouncement" type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- USER Card -->
                    <div class="col-xxl-4 col-xl-4">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Total Activites </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">


                            <div class="card-body">
                                <h5 class="card-title">Total Completed Activites </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>





                    <?php
                    $sql1 = "SELECT count(*) male FROM users WHERE gender='Male' AND role='user'";
                    $sql2 = "SELECT count(*) as female FROM users WHERE gender='Female' AND role ='user'";
                    $sql3 = "SELECT count(*) as other FROM users WHERE gender='other' AND role ='user'";

                    $result1 = mysqli_query($con, $sql1);
                    $result2 = mysqli_query($con, $sql2);
                    $result3 = mysqli_query($con, $sql3);

                    $row1 = mysqli_fetch_assoc($result1);
                    $row2 = mysqli_fetch_assoc($result2);
                    $row3 = mysqli_fetch_assoc($result3);
                    ?>
                    <canvas id="myChart" style="width:100%;max-width:600px;"></canvas>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
                    </script>

                    <script>
                        var xValues = ["Male", "Female", "Other"];
                        var yValues = [<?php echo $row1['male'] ?>, <?php echo $row2['female'] ?>, <?php echo $row3['other'] ?>];
                        var barColors = [
                            "#b91d47",
                            "#00aba9",
                            "#2b5797"
                        ];
                        new Chart("myChart", {
                            type: "pie",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                }]
                            },
                            options: {
                                title: {
                                    display: true,
                                    text: "World Wide Wine Production 2018"
                                }
                            }
                        });
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
                    </script>
                    <div class="card mb-4" style="margin: 10px;">
                        <div class="card-header" style='font-size: 18px; color:black; font-weight: 600; margin-bottom: 0;'>
                            <i class="bi bi-table"></i>
                            <?php 
                             $sql = "SELECT * FROM users";
                             $result = $con->query($sql);
                            ?>

<div class="col-lg-12">
    <div class="table-responsive">
        <table id="second-morris-table" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <button class="edit-button" data-id="<?php echo $row['id']; ?>">Edit</button>
                    </td>
                </tr>
                <?php } ?>
                <!-- Add more rows here with corresponding data -->
            </tbody>
        </table>
    </div>
</div>

<script>
    // JavaScript to handle the "Edit" button click event
    const editButtons = document.querySelectorAll(".edit-button");
    editButtons.forEach(button => {
        button.addEventListener("click", function() {
            const userId = this.getAttribute("data-id");
            // Redirect to the edit_user.php page with the user's ID
            window.location.href = `edit_user.php?id=${userId}`;
        });
    });
</script>


<div>
    


                            List Of Activities
                        </div>

                        <div class="card-header">
                            <div class="upper-table">
                                <input type="text" name="searchUser" placeholder="Enter Lastname">
                            </div>
                            <!-- <table class="table" style="height: 450px; overflow:auto;"> -->
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Activity Name</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>OOTD</th>
                                        <th>Remarks</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($activities)) {
                                        $countActivity = 1;
                                        foreach ($activities as $activity) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $countActivity++; ?>
                                                </td>
                                                <td>
                                                    <?php echo $activity['activityName']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $activity['location']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $activity['dateOfActivity']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $activity['timeOfActivity']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $activity['ootd']; ?>
                                                </td>
                                                <td>
                                                    <p>
                                                        <?php echo $activity['remarks'] ?>
                                                    </p>
                                                </td>


                                            </tr>
                                        <?php }
                                    } else { ?>
                                        <div class="alert alert-warning alert-dismissable fade show" role="alert" style="display:flex;align-items: center; justify-content:space-between;">
                                            <strong>No Activity Added Yet!</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="close" style="width: 50px;"></button>
                                        </div>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <style>
                        table td {
                            vertical-align: middle;
                        }
                    </style>


                </div>
    </section>

</main>

<!-- Modal -->

<!-- ADD Activity -->
<div id="activityModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <header>Add Activity</header>
        <form action='' method='POST' enctype="multipart/form-data">
            <!-- Activity Name -->
            <div class='field input-field'>
                <input type='text' name='nameActivity' placeholder='Name Activity' class='input' required>
            </div>

            <!-- Activity Location -->
            <div class='field input-field'>
                <input type='text' name='location' placeholder='Location' class='input' required>
            </div>

            <!-- Activity Date & Time -->
            <div class='field input-field' style="display: flex; align-items:center; gap: 20px;">
                <div>
                    <label>Date: </label>
                    <input type='date' name='date' placeholder='Date' class='input'>
                </div>
                <div>
                    <label>Time: </label>
                    <input type='time' name='time' placeholder='Time' class='input'>
                </div>
            </div>

            <!-- Activity File OOTD -->
            <div>
                <label>OOTD: </label>
                <input type='file' name='image' class='file' accept='image/*' style="margin-bottom: 20px;">
            </div>

            <div class='field button-field'>
                <input type='submit' class='addActivity' id='submitBtn' name='addActivity' value='Add'>
            </div>
        </form>
    </div>
</div>

<!-- EDIT Activity -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <header>Edit Activity</header>
        <form action='register.php' method='POST'>
            <!-- Activity Name -->
            <div class='field input-field'>
                <input type='text' name='nameActivity' placeholder='Name Activity' class='input' value='<?php echo $rowActivity[' activityName'] ?>' required>
            </div>

            <!-- Activity Location -->
            <div class='field input-field'>
                <input type='text' name='location' placeholder='Location' class='input' value='<?php echo $rowActivity['
                    location'] ?>' required>
            </div>

            <!-- Activity Date & Time -->
            <div class='field input-field' style="display: flex; align-items:center; gap: 20px;">
                <div>
                    <label>Date: </label>
                    <input type='date' name='date' placeholder='Date' class='input' value='<?php echo $rowActivity['
                        dateOfActivity'] ?>' required>
                </div>
                <div>
                    <label>Time: </label>
                    <input type='time' name='time' placeholder='Time' class='input' value='<?php echo $rowActivity['
                        timeOfActivity'] ?>' required>
                </div>
            </div>

            <!-- Activity File OOTD -->
            <div>
                <label>OOTD: </label>
                <input type='file' name='upload' class='file' accept='image/*' required style="margin-bottom: 20px;">
            </div>

            <div class='field button-field'>
                <input type='submit' class='addActivity' id='submitBtn' name='addActivity' value='Add'>
            </div>
        </form>
    </div>
</div>

<!-- Show Activity -->
<div id="showModal" class="modal">
    <div class="modal-content" style="max-width:80%; margin:7% auto;">
        <span class="close" onclick="closeModal()">&times;</span>
        <header>Show Activity</header>
        <div class="card mb-4">
            <div class="card-header">
                <input type="text" placeholder="Search name">

            </div>
            <div class="card-header" style=" margin-bottom: 0px;">
                <table id="datatablesSimple" class='table' style='text-align:center;'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Activity Name</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>OOTD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $countActivity = 0;
                        do { ?>
                            <tr>
                                <td>
                                    <?php echo $countActivity++ ?>
                                </td>
                                <td>
                                    <?php echo $rowActivity['activityName'] ?>
                                </td>
                                <td>
                                    <?php echo $rowActivity['location'] ?>
                                </td>
                                <td>
                                    <?php echo $rowActivity['dateOfActivity'] ?>
                                </td>
                                <td>
                                    <?php echo $rowActivity['timeOfActivity'] ?>
                                </td>
                                <td>
                                    <?php echo '<img src="data:image;base64,' . base64_encode($rowActivity['image']) . '">'; ?>
                                </td>
                                <!-- <td><img src="assets/img/profile-img.jpg" style="width: 80px; height:80px; object-fit:cover; border-radius: 5px;" alt="OOTD"></td> -->

                            </tr>


                        <?php } while ($rowActivity = $resultActivity->fetch_assoc()) ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Set Activity -->
<div id="setModal" class="modal">
    <div class="modal-content" style="max-width:80%; margin:7% auto;">
        <span class="close" onclick="closeModal()">&times;</span>
        <header>Set Activity</header>
        <div class="card mb-4">
            <div class="card-header">
                <input type="text" placeholder="Search name">

            </div>
            <div class="card-header">
                <table id="datatablesSimple" class='table' style='text-align:center;'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Activity Name</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>OOTD</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sing Opera</td>
                            <td>Carmelites Center</td>
                            <td>09/26/2023</td>
                            <td>8:00AM</td>
                            <td><img src="assets/img/profile-img.jpg" style="width: 80px; height:80px; object-fit:cover; border-radius: 5px;" alt="OOTD">
                            </td>
                            <td>
                                <button>Cancel</button>
                                <button>Done</button>
                                <button>Remarks</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cook</td>
                            <td>Carmelites Center</td>
                            <td>09/26/2023</td>
                            <td>8:00AM</td>
                            <td><img src="assets/img/profile-img.jpg" style="width: 80px; height:80px; object-fit:cover; border-radius: 5px;" alt="OOTD">
                            </td>
                            <td>
                                <button>Cancel</button>
                                <button>Done</button>
                                <button>Remarks</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Draw</td>
                            <td>Carmelites Center</td>
                            <td>09/26/2023</td>
                            <td>8:00AM</td>
                            <td><img src="assets/img/profile-img.jpg" style="width: 80px; height:80px; object-fit:cover; border-radius: 5px;" alt="OOTD">
                            </td>
                            <td>
                                <button>Cancel</button>
                                <button>Done</button>
                                <button>Remarks</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include_once('admin-footer.php') ?>