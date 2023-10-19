<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../../assets/img/regna.png" type="image/x-icon">
  <title>CodePen - Start Bootstrap Admin Panel</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.css'>
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/css/sb-admin-2.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css'>
  <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/416491/timeline.css'>
  <link rel="stylesheet" href="./style.css">



  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>
<style>
  .close {
    margin-right: 45vh;
    margin-top: -6vh;
    color: black;
  }

  .rem {
    font-size: 1.8rem;
  }
</style>

<body>
  <!-- partial:index.partial.html -->
  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
      </div>
      <!-- /.navbar-header -->

      <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-messages">
            <li>
              <a href="#">
                <div>
                  <strong>John Smith</strong>
                  <span class="pull-right text-muted">
                    <em>Yesterday</em>
                  </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <strong>John Smith</strong>
                  <span class="pull-right text-muted">
                    <em>Yesterday</em>
                  </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <strong>John Smith</strong>
                  <span class="pull-right text-muted">
                    <em>Yesterday</em>
                  </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a class="text-center" href="#">
                <strong>Read All Messages</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-tasks">
            <li>
              <a href="#">
                <div>
                  <p>
                    <strong>Task 1</strong>
                    <span class="pull-right text-muted">40% Complete</span>
                  </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                      aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <p>
                    <strong>Task 2</strong>
                    <span class="pull-right text-muted">20% Complete</span>
                  </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                      aria-valuemax="100" style="width: 20%">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <p>
                    <strong>Task 3</strong>
                    <span class="pull-right text-muted">60% Complete</span>
                  </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                      aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <p>
                    <strong>Task 4</strong>
                    <span class="pull-right text-muted">80% Complete</span>
                  </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete (danger)</span>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a class="text-center" href="#">
                <strong>See All Tasks</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
          <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-alerts">
            <li>
              <a href="#">
                <div>
                  <i class="fa fa-comment fa-fw"></i> New Comment
                  <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                  <span class="pull-right text-muted small">12 minutes ago</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <i class="fa fa-envelope fa-fw"></i> Message Sent
                  <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <i class="fa fa-tasks fa-fw"></i> New Task
                  <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#">
                <div>
                  <i class="fa fa-upload fa-fw"></i> Server Rebooted
                  <span class="pull-right text-muted small">4 minutes ago</span>
                </div>
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a class="text-center" href="#">
                <strong>See All Alerts</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </li>
          </ul>
          <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
      <!-- /.navbar-top-links -->

      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li class="sidebar-search">
              <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <!-- /input-group -->
            </li>
            <li>
              <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="flot.html">Flot Charts</a>
                </li>
                <li>
                  <a href="morris.html">Morris.js Charts</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
            </li>
            <li>
              <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
              <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="panels-wells.html">Panels and Wells</a>
                </li>
                <li>
                  <a href="buttons.html">Buttons</a>
                </li>
                <li>
                  <a href="notifications.html">Notifications</a>
                </li>
                <li>
                  <a href="typography.html">Typography</a>
                </li>
                <li>
                  <a href="icons.html"> Icons</a>
                </li>
                <li>
                  <a href="grid.html">Grid</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
            </li>
            <li>
              <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="#">Second Level Item</a>
                </li>
                <li>
                  <a href="#">Second Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level <span class="fa arrow"></span></a>
                  <ul class="nav nav-third-level">
                    <li>
                      <a href="#">Third Level Item</a>
                    </li>
                    <li>
                      <a href="#">Third Level Item</a>
                    </li>
                    <li>
                      <a href="#">Third Level Item</a>
                    </li>
                    <li>
                      <a href="#">Third Level Item</a>
                    </li>
                  </ul>
                  <!-- /.nav-third-level -->
                </li>
              </ul>
              <!-- /.nav-second-level -->
            </li>
            <li>
              <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="blank.html">Blank Page</a>
                </li>
                <li>
                  <a href="login.html">Login Page</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
            </li>
          </ul>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-comments fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">26</div>
                  <div>New Comments!</div>
                </div>
              </div>
            </div>
            <a href="#">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-green">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">12</div>
                  <div>New Tasks!</div>
                </div>
              </div>
            </div>
            <a href="#">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-yellow">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-shopping-cart fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">124</div>
                  <div>New Orders!</div>
                </div>
              </div>
            </div>
            <a href="#">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="panel panel-red">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-3">
                  <i class="fa fa-support fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                  <div class="huge">13</div>
                  <div>Support Tickets!</div>
                </div>
              </div>
            </div>
            <a href="#">
              <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-8">
          <!-- /.panel -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
              <div class="pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                    Actions
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Action</a>
                    </li>
                    <li><a href="#">Another action</a>
                    </li>
                    <li><a href="#">Something else here</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
           
            <div class="row">
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
                      <?php
                      include_once("dbconnect.php");
                      $conn = getConnection();
                      $sql = "SELECT * FROM users";
                      $result = mysqli_query($conn, $sql);

                      if (mysqli_num_rows($result) > 0):
                        while ($row = mysqli_fetch_assoc($result)):
                          ?>
                          <tr>
                            <td>
                              <?= $row['id'] ?>
                            </td>
                            <td>
                              <?= $row['firstname'] ?>
                            </td>
                            <td>
                              <?= $row['lastname'] ?>
                            </td>
                            <td>
                              <?= $row['gender'] ?>
                            </td>
                            <td>
                              <?= $row['address'] ?>
                            </td>
                            <td>
                              <?= $row['email'] ?>
                            </td>
                            <td>
                              <?= $row['role'] ?>
                            </td>
                            <td>
                              <?= $row['status'] ?>
                            </td>
                            <td><button onclick="update(<?= $row['id'] ?>)">UPDATE</button></td>


                          </tr>
                          <?php


                          // Add hidden fields with user data
                          echo '<input type="hidden" name="id' . $row["id"] . '" value="' . $row["id"] . '">';
                          echo '<input type="hidden" name="firstname_' . $row["id"] . '" value="' . $row["firstname"] . '">';
                          echo '<input type="hidden" name="lastname_' . $row["id"] . '" value="' . $row["lastname"] . '">';
                          echo '<input type="hidden" name="gender_' . $row["id"] . '" value="' . $row["gender"] . '">';
                          echo '<input type="hidden" name="address_' . $row["id"] . '" value="' . $row["address"] . '">';
                          echo '<input type="hidden" name="email_' . $row["id"] . '" value="' . $row["email"] . '">';
                          echo '<input type="hidden" name="password_' . $row["id"] . '" value="' . $row["password"] . '">';
                          echo '<input type="hidden" name="role_' . $row["id"] . '" value="' . $row["role"] . '">';
                          echo '<input type="hidden" name="status_' . $row["id"] . '" value="' . $row["status"] . '">';
                        endwhile;
                      else:
                        echo "0 results";
                      endif;
                      ?>
                    </tbody>
                  </table>

                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div id="editForm" style="display: none;">
              <h2>Edit User</h2>
              <form method="post" action="../../database/updateUser.php">
                <td><span class="close" onclick="cancel()">&times;</span></td>

                <input type="hidden" id="edit_id" name="update_id">
                <label class="rem">First Name:</label>
                <input class="rem" type="text" id="new_firstname" name="new_firstname" required
                  value="<?php echo $row['firstname']; ?>"><br><br>
                <label class="rem">Last Name:</label>
                <input class="rem" type="text" id="new_lastname" name="new_lastname" required
                  value="<?php echo $row['lastname']; ?>"><br><br>
                <label class="rem">Gender:</label>
                <input class="rem" type="text" id="new_gender" name="new_gender" required
                  value="<?php echo $row['gender']; ?>"><br><br>
                <label class="rem">Address:</label>
                <input class="rem" type="text" id="new_address" name="new_address" required
                  value="<?php echo $row['address']; ?>"><br><br>
                <label class="rem">Email:</label>
                <input class="rem" type="text" id="new_email" name="new_email" required
                  value="<?php echo $row['email']; ?>"><br><br>
                <label class="rem">Password:</label>
                <input class="rem" type="text" id="new_password" name="new_password" required
                  value="<?php echo $row['password']; ?>"><br><br>
                <label class="rem">Role:</label>
                <input class="rem" type="text" id="new_role" name="new_role" required
                  value="<?php echo $row['role']; ?>"><br><br>
                <label class="rem">Status:</label>
                <input class="rem" type="text" id="new_status" name="new_status" required
                  value="<?php echo $row['status']; ?>"><br><br>
                <input class="rem" type="submit" name="update" value="Update">
              </form>

            </div><br><br><br><br>
            <?php
            $sql = "SELECT * FROM activity";
            $result = mysqli_query($conn, $sql);
            ?>

            <table class="table table-striped" id="crudTable" style="height=5vh;">
              <thead>
                <tr>
                  <th>Activity Name</th>
                  <th>Activity Date</th>
                  <th>Activity Time</th>
                  <th>Activity location</th>
                  <th>Activity OOTD</th>
                  <th>User Id</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                  <!-- Table rows will be added dynamically here -->
                  <td>
                    <?php echo $row['name']; ?>
                  </td>
                  <td>
                    <?php echo $row['date']; ?>
                  </td>
                  <td>
                    <?php echo $row['time']; ?>
                  </td>
                  <td>
                    <?php echo $row['location']; ?>
                  </td>
                  <td>
                    <?php echo $row['OOTD']; ?>
                  </td>
                  <td>
                    <?php echo $row['user_id']; ?>
                  </td>

                </tbody>
              <?php } ?>
            </table>


  
          </div>

        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
      

          <?php
          $sql1 = "SELECT count(*) as male FROM users WHERE gender='male' AND role= 'user'";
          $sql2 = "SELECT count(*) as female FROM users WHERE gender='female' AND role= 'user'";
          $sql3 = "SELECT count(*) as other FROM users WHERE gender='other' AND role= 'user'";

          $result1 = mysqli_query($conn, $sql1);
          $result2 = mysqli_query($conn, $sql2);
          $result3 = mysqli_query($conn, $sql3);

          $row1 = mysqli_fetch_assoc($result1);
          $row2 = mysqli_fetch_assoc($result2);
          $row3 = mysqli_fetch_assoc($result3);
          ?>
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
            </div>
            <div class="panel-body">
            <!-- <div id="morris-donut-chart"></div> -->
              <canvas id="myChart" style="width:100%;max-width:600px;"></canvas>
            </div>
          </div>
      

        </div>
   

      </div>

    </div>
    <!-- /#page-wrapper -->

  </div>


  <script>
    var modals = document.getElementById("editForm");
    var close = document.getElementsByClassName("close");
    function cancel() {
      if (close) {
        modals.style.display = "none";
      }
    }






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

  <script>
    var xValues = ["Male","Female", "Other"];
    var yValues = [<?php echo $row1['male']?>,<?php echo $row2['female']?>, <?php echo $row3['other']?>];
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





  <!-- /#wrapper -->
  <!-- partial -->
  <script src='https://code.jquery.com/jquery-3.1.0.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.1/raphael.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/3.3.7/js/sb-admin-2.js'></script>
  <script src='https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js'></script>
  <script src="../assets/js/script.js"></script>
</body>

</html>