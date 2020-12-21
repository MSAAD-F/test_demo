<?php
define('PAGE', 'Signup');
define('TITLE', 'Signup');
// Including Header File
include('includes/header.php');

// Including Connection file
require_once('connection.php ');
$role2 = "user";

// Checking if click on signup buttton
if (isset($_POST['signup'])) {

  // Checking If Input Fields are Empty
  if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
    header('location:signup?Empty=Please Fill The Empty Fields');
  } else {

    //  Storing values in variable(for easy)
    $role = $_POST['role'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $added_on = date('Y-m-d h:i:s');

    // Checking email is valid or not -- if Email is Valid then execute this
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
      // Creaing variable with name sql to insert data in database 
      $sql = "INSERT INTO `sign_up` (`role`,`name`,`email`,`password`,`added_on`) VALUES ('$role', '$name', '$email', '$password', '$added_on')";

      // Creaing variable with name query to select name from database 
      $query = ("SELECT * FROM `sign_up` WHERE name='$name' ");

      // Creaing variable with name query_more to execute the query 
      $query_more = mysqli_query($con, $query) or die("Connect Execute Query" . mysqli_error($con));

      // Creaing variable with name result to check rows in database
      $result = mysqli_num_rows($query_more);


      // Checking user name already taken or not if taken then execute this
      if ($result > 0) {
        // Giving Error Messsage
        header('location:signup?Error=User Name Already Taken');

        // if not taken then execute this
      } else {

        // Checking if data inserted successhfully then execute this
        if ($con->query($sql) == TRUE) {
          // Giving Success Messsage
          header('location:signup?Success=You Are Successfully Registered');

          // Checking if data is not inserted successhfully then execute this
        } else {
          echo "Error: $sql <br> $con->error";
        }
      }
      // Email is not Valid then execute this
    } else {
      // Giving Error Messsage
      header('location:signup?Error=Email is not Valid');
    }
  }
}


?>

<!-- ================================================
                Signup
================================================ -->
<div class="container form-handle">
  <!-- Start Container && Form Handles -->

  <div class="row" style="display: block;">
    <!-- Start Row -->

    <h2 style="text-align:center">Sign up With Us</h2>


    <hr class="hor-line">
    <!-- ================================================
                Form
      ================================================ -->
    <div class="col login-social mt-5">
      <!-- Start Column -->

      <div class="hide-md-lg">
        <!-- Start Hide Medium Large -->
        <p>Or sign in manually:</p>
      </div><!-- End Hide Medium Large -->

      <form method="post" action="signup">
        <!-- Start Form -->
        <!-- ========== First(Input Fields) ========== -->
        <input type="hidden" name="role" value="<?php echo $role2 ?>">

        <!-- ========== First(Input Fields) ========== -->
        <input type="text" name="name" placeholder="Username">

        <!-- ========== Second(Input Fields) ========== -->
        <input type="email" name="email" placeholder="Email">

        <!-- ========== Third(Input Fields) ========== -->
        <input type="password" name="password" placeholder="Password">

        <!-- ========== Forth(Input Fields) ========== -->
        <button class="btn signup" name="signup"><i class="fas fa-sign-in-alt"></i> Signup</button>

        <?php include('includes/msg.php'); ?>

      </form><!-- End Form -->


      <!-- ================================================
            Signup With Social Media
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


</body>
</html>