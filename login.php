<?php
define('PAGE', 'Login');
define('TITLE', 'Login');

// Including Header File
include('includes/header.php');
// Including Connection File 
require_once('connection.php');

// Checking If Click On Login Button
if (isset($_POST['login'])) {

  // Checking If Input Fields Are Empty
  if (empty($_POST['name']) || empty($_POST['password'])) {
    header('location:login?Empty=Please Fill The Input Fields');
  } else {

    // Creaing variable with name sql to select data from database 
    $sql = "SELECT * FROM `sign_up` WHERE  name='" . $_POST['name'] . "' AND password='" . $_POST['password'] . "' ";

    // Creaing variable with name result to store data in it 
    $result = mysqli_query($con, $sql);

    // Creaing variable with name row to fetch data from database 
    $row = mysqli_fetch_assoc($result);

    // Checking if row is true(execute) 
    if ($row == true) {
      // Storing data in sessions
      $_SESSION['password'] = $row['password'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['user'] = $row['name'];
      $_SESSION['id'] = $row['id'];

      // Checking if role is equal to admin
      if ($row['role'] == 'admin') {
        // Redirect To Admin Page
        header('location:admin/index');

        // Checking if role is equal to supervisor
      } else if ($row['role'] == 'supervisor') {
        // Redirect To Supervisor Page
        header('location:supervisor/index');

        // Checking if role is equal to user
      } else if ($row['role'] == 'user') {
        // Redirect To User Page
        header('location:udashboard');

        // Checking if role is equal to employee
      } else if ($row['role'] == 'employee') {
        // Redirect To Employee Page
        header('location:empdashboard');
      }
      // if row is false(not execute) 
    } else {
      // Giving Error Messsage
      header('location:login ?Invalid=Invalid Username or Password');
    }
  }
}


?>
<!-- ================================================
                Login
================================================ -->
<!-- ========================================================= -->
<div class="container form-handle">
  <!-- Start Container && Form Handles -->

  <div class="row" style="display: block;">
    <!-- Start Row -->

    <h2 style="text-align:center">Login with Us</h2>

    <hr class="hor-line">
    <!-- ================================================
                Form
      ================================================ -->
    <div class="col login-social mt-5">
      <!-- Start Column -->
      <form action="login" method="POST">
        <!-- Start Form -->

        <!-- ========== First(Input Fields) ========== -->
        <input type="text" name="name" placeholder="Username">

        <!-- ========== Second(Input Fields) ========== -->
        <input type="password" name="password" placeholder="Password">

        <!-- ========== Forth(Input Fields) ========== -->
        <button class="btn signup" name="login"><i class="fas fa-user-plus"></i> Login</button>

        <?php include('includes/msg.php'); ?>

      </form><!-- End Form -->

      <!-- ================================================
            Login With Social Media
      ================================================ -->

      <div class="vl">
        <!-- Start vl -->
        <span class="vl-innertext">or</span>
      </div><!-- End vl -->

      <div class="d-flex">
        <!-- Start Column -->
        <!-- ========== First(Lgoin With Social Media) ========== -->
        <a href="#" class="fb btn m-2">
          <i class="fa fa-facebook fa-fw"></i>
        </a>

        <!-- ========== Second(Lgoin With Social Media) ========== -->
        <a href="#" class="twitter btn m-2">
          <i class="fa fa-twitter fa-fw"></i>
        </a>

        <!-- ========== Third(Lgoin With Social Media) ========== -->
        <a href="#" class="google btn m-2"><i class="fa fa-google fa-fw">
          </i>
        </a>

        <!-- ========== Forth(Lgoin With Social Media) ========== -->
        <a href="#" class="gitgub btn m-2"><i class="fab fa-github fa-fw"></i>
          </i>
        </a>

      </div><!-- End Column -->

    </div><!-- End Column -->

  </div><!-- End Row -->
</div><!-- End Container && Form Handles -->


<script src="assets/js/index.js"></script>
</body>

</html>