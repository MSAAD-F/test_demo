<?php
session_start();
include('includes/udashheader.php');

// Declaring PAth Of Image Folder
$imgDir = "../assets/images/products/";

// Checking if CLick On button
if (isset($_POST['addproduct'])) {

    // Checking If Fields Are Empty
    if (
        empty($_POST['pcate']) ||
        empty($_POST['pname']) ||
        empty($_POST['pcname'])  ||
        empty($_POST['poprice']) ||
        empty($_POST['psprice']) ||
        empty($_POST['pquantity']) ||
        empty($_POST['pdate']) ||
        empty($_POST['pdesc'])  ||
        empty($_FILES['pimg']['name']) ||
        empty($_FILES['pmore_img1']['name']) ||
        empty($_FILES['pmore_img2']['name'])
    ) {

        echo ("<script>location.href='udashboard?Empty=Please Fill The Empty Blanks';</script>");
    } else {

        // Declaring Variables to save image(1) name in database
        $pimg = basename($_FILES['pimg']['name']);
        $fileTarget = $imgDir . $pimg;
        $fileType = pathinfo($fileTarget, PATHINFO_EXTENSION);
        $fileAllowed = array('jpg', 'png', 'jpeg');

        // Declaring Variables to save image(2) name in database
        $pmore_img1 = basename($_FILES['pmore_img1']['name']);
        $more_fileTarget1 = $imgDir . $pmore_img1;
        $more_fileType1 = pathinfo($more_fileTarget1, PATHINFO_EXTENSION);
        // $fileAllowed = array('jpg', 'png', 'jpeg');

        // Declaring Variables to save image(3) name in database
        $pmore_img2 = basename($_FILES['pmore_img2']['name']);
        $more_fileTarget2 = $imgDir . $pmore_img2;
        $more_fileType2 = pathinfo($more_fileTarget2, PATHINFO_EXTENSION);
        // $fileAllowed = array('jpg', 'png', 'jpeg');

        // Decalring variable to store input data in database
        $pcate = $_POST['pcate'];
        $pname = $_POST['pname'];
        $pcname = $_POST['pcname'];
        $poprice = $_POST['poprice'];
        $psprice = $_POST['psprice'];
        $padprice = $_POST['padprice'];
        $pquantity = $_POST['pquantity'];
        $pdate = $_POST['pdate'];
        $pdesc = $_POST['pdesc'];
        $added_on = date('Y-m-d h:i:s');


        // Creaing variable with name query to select name from database 
        $query = "SELECT pname FROM product WHERE pname='$pname' ";

        // Creaing variable with name query_more to execute the query 
        $query_more = mysqli_query($con, $query);

        // Creaing variable with name query_row to check rows in database
        $query_row = mysqli_num_rows($query_more);

        // Checking user product name already taken or not if taken then execute this
        if ($query_row > 0) {
            // Giving Error Messsage
            echo ("<script>location.href='udashboard?Error=Product Already Added';</script>");

            // if not taken then execute this
        } else {

            // Checking if file type is same to we declare at top
            if (
                in_array($fileType, $fileAllowed) &&
                in_array($more_fileType1, $fileAllowed) &&
                in_array($more_fileType2, $fileAllowed)
            ) {

                // sending image name to database
                if (
                    move_uploaded_file($_FILES['pimg']['tmp_name'], $fileTarget) &&
                    move_uploaded_file($_FILES['pmore_img1']['tmp_name'], $more_fileTarget1) &&
                    move_uploaded_file($_FILES['pmore_img2']['tmp_name'], $more_fileTarget2)
                ) {

                    $sql = "INSERT INTO product (`pcate`,`pname`,`pcname`,`poprice`,`psprice`,`padprice`,`pquantity`,`pdate`,`pdesc`,`pimg`,`pmore_img1`,`pmore_img2`,`added_on`) VALUES ('$pcate','$pname','$pcname','$poprice','$psprice','$padprice','$pquantity','$pdate','$pdesc','$pimg','$pmore_img1','$pmore_img2','$added_on')";

                    // Checking if data succssfully inserted to database
                    if ($con->query($sql) == TRUE) {

                        // If Sava in database
                        echo ("<script>location.href='udashboard?Success=Product Successfully Inserted';</script>");

                        // If not Sava in database
                    } else {
                        echo ("<script>location.href='udashboard?Error=$sql <br> $con->error';</script>");
                    }
                    // If Image not save in database and folder(path given at top)
                } else {

                    echo ("<script>location.href='udashboard?Error=Failed To Upload Image';</script>");
                }
                // If image format is not same(declare at top)
            } else {
                echo ("<script>location.href='udashboard?Error=Only JPG , PNG , JPEG are allowed';</script>");
            }
        }
    }
}

?>

<!-- ================================================================= -->

<div class="col-lg-9">
    <div class="tab-content">
        <!-- Start Tab Content -->
        <!-- ============================================================
                ============================================================ -->

        <?php include('includes/update.php') ?>
        <!-- ========== First(Detail) ========== -->
        <div id="profile" class="tab-pane fade in active">
            <!-- Start Tab Pane -->
            <h3>Product Detail</h3>
            <form method="post">
                <!-- Start Form -->

                <!-- ========== Firdt(Input Fields) ========== -->
                <input type="email" name="email" placeholder="Email" readonly value="<?php echo $_SESSION['email']  ?>">

                <!-- ========== Second(Input Fields) ========== -->
                <input type="text" name="name" placeholder="Username" value="<?php echo $_SESSION['user'] ?>">

                <!-- ========== Third(Input Fields) ========== -->
                <input type="password" name="password" placeholder="Password" value="<?php echo $_SESSION['password'] ?>">

                <!-- ========== Forth(Input Fields) ========== -->
                <button class="btn signup" name="update_user">Update</button>
            </form><!-- End Form -->

        </div><!-- End Tab Pane -->
        <!-- ============================================================
                ============================================================ -->

        <!-- ========== Second(Add) ========== -->
        <div id="order_history" class="tab-pane fade">
            <!-- Start Tab Pane -->
            <h3>Order History</h3>

        </div><!-- End Tab Pane -->
        <!-- ============================================================
                ============================================================ -->

        <!-- ========== Third(Update) ========== -->
        <div id="report" class="tab-pane fade">
            <!-- Start Tab Pane -->
            <h3>Report</h3>

        </div><!-- End Tab Pane -->
        <!-- ============================================================
                ============================================================ -->

        <!-- ========== Third(Update) ========== -->
        <div id="addproduct" class="tab-pane fade">
            <!-- Start Tab Pane -->
            <h3>Add Product</h3>

            <form method="POST" enctype="multipart/form-data">
                <!-- Start Form -->
                <div class="row">
                    <!-- Start Row -->

                    <!-- ========================================================= -->
                    <div class="col">
                        <!-- Start Column -->

                        <!-- ========== First(Input Fields) ========== -->
                        <select name="pcate">
                            <?php
                            $sql = "SELECT * FROM category";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['cate_name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>

                        <!-- ========== First(Input Fields) ========== -->
                        <input type="text" name="pname" placeholder="Product Name">

                        <!-- ========== Second(Input Fields) ========== -->
                        <input type="text" name="pcname" placeholder="Product Company Name">

                        <!-- ========== Third(Input Fields) ========== -->
                        <input type="num" name="poprice" placeholder="Product Orignal Price">

                        <!-- ========== Forth(Input Fields) ========== -->
                        <input type="number" name="psprice" placeholder="Product Sale Price">

                        <!-- ========== Fifth(Input Fields) ========== -->
                        <input type="number" name="padprice" placeholder="Product Price After Discounted(Optional)">

                        <!-- ========== Sixth(Input Fields) ========== -->
                        <input type="number" name="pquantity" placeholder="Product Quantity">

                        <!-- ========== Seventh(Input Fields) ========== -->
                        <input type="date" name="pdate" placeholder="Product Purchase Date">

                        <!-- ========== Eight(Input Fields) ========== -->
                        <input type="file" name="pimg" placeholder="Product Image">

                        <!-- ========== Ninth(Input Fields) ========== -->
                        <textarea type="text" name="pdesc" cols="30" rows="10" placeholder="Enter Product Description"></textarea>
                        <!-- <input type="text" name="pdesc" placeholder="Enter Product Description"> -->

                        <!-- ========== Tenth(Input Fields) ========== -->
                        <label for="more_img">More Images Of Product:</label>
                        <input type="file" name="pmore_img1" placeholder="Product More Image">
                        <input type="file" name="pmore_img2" placeholder="Product More Image">

                        <br>
                        <!-- ========== Tenth(Button) ========== -->
                        <button class="btn signup" type="submit" name="addproduct">Add Product</button>

                    </div><!-- End Column -->

                </div><!-- End Row -->
            </form><!-- End Form -->

        </div><!-- End Tab Pane -->



    </div><!-- End Tab Content -->
</div>
</div><!-- End Tabs Container -->
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>