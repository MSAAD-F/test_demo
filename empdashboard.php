<?php
session_start();
include('includes/edashheader.php');

?>

<!-- ================================================================= -->

<div class="col-lg-9">
    <!-- Start Column Large 9 -->
    <div class="tab-content">
        <!-- Start Tab Content -->
        <!-- ============================================================
                ============================================================ -->

        <!-- ========== First(Detail) ========== -->
        <div id="profile" class="tab-pane fade in active">
            <!-- Start Tab Pane -->
            <h3>My Details</h3>
            <form method="post">
                <!-- Start Form -->

                <!-- ========== Firdt(Input Fields) ========== -->
                <input type="email" name="email" placeholder="Email" readonly value="<?php echo $_SESSION['email']  ?>">

                <!-- ========== Second(Input Fields) ========== -->
                <input type="text" name="name" placeholder="Username" value="<?php echo $_SESSION['user'] ?>">

                <!-- ========== Third(Input Fields) ========== -->
                <input type="password" name="password" placeholder="Password" value="<?php echo $_SESSION['password'] ?>">

                <!-- ========== Forth(Input Fields) ========== -->
                <button class="btn signup" name="update">Update</button>

            </form><!-- End Form -->

        </div><!-- End Tab Pane -->
        <!-- ============================================================
                ============================================================ -->

        <!-- ========== Second(Add) ========== -->
        <div id="order_history" class="tab-pane fade">
            <!-- Start Tab Pane -->
            <h3>Work Detail</h3>

        </div><!-- End Tab Pane -->
        <!-- ============================================================
                ============================================================ -->

        <!-- ========== Third(Update) ========== -->
        <div id="report" class="tab-pane fade">
            <!-- Start Tab Pane -->
            <h3>Pending Work</h3>

        </div><!-- End Tab Pane -->



    </div><!-- End Tab Content -->
</div><!-- End Column Large 9 -->
</div><!-- End Row -->
</div><!-- End Container && User Dash -->
</div><!-- End Tabs Container -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>