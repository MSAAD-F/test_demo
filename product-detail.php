<?php
define('TITLE', 'Prodcut Detail');
// Including Header File
include('includes/header.php');

// Including Connection file
require_once('connection.php ');
?>
<style>
    .product-deatil {
        padding: 0.75rem 4rem;
    }

    .product-btn .col-md-6 {
        padding: 4px;
    }

    .product-select label {
        font-size: 16px;
        font-weight: 400;
        margin: 5px 0 0;
    }

    .product-select select,
    input {
        border: 1px solid #bdb9b9;
    }

    .main_img {
        height: 338px;
    }

    .main_img img {
        max-height: 310px;
        width: 100%;
        margin: 0 0 2rem;
    }

    .image_list li {
        margin: 1rem;
    }

    .image_list li a {
        height: 100%;
    }

    .image_list li a img {
        width: 100%;
        height: 100%;
    }

    .item_quan {
        font-size: 15px;
        color: #777777;
        align-items: center;
        display: flex;
        height: 55px;
        float: left;
    }
</style>

<?php

if (isset($_POST['view-detail'])) {
    $sql = "SELECT * FROM product WHERE id={$_POST['id']}";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $_SESSION['pname'] = $row['pname'];
    $_SESSION['pcname'] = $row['pcname'];
    $_SESSION['padprice'] = $row['padprice'];
    $_SESSION['psprice'] = $row['psprice'];
    $_SESSION['pquantity'] = $row['pquantity'];
    $_SESSION['pdesc'] = $row['pdesc'];
    $_SESSION['pimg'] = $row['pimg'];
    $_SESSION['pmore_img1'] = $row['pmore_img1'];
    $_SESSION['pmore_img2'] = $row['pmore_img2'];
    $_SESSION['pcolor'] = $row['pcolor'];
    $_SESSION['psize'] = $row['psize'];
}
$imgUrl = "assets/images/products/" . $_SESSION['pimg'];
$imgUrl2 = "assets/images/products/" . $_SESSION['pmore_img1'];
$imgUrl3 = "assets/images/products/" . $_SESSION['pmore_img2'];
?>
<div class="super_container">
    <!--- Start Super Container -->
    <div class="single_product">
        <!--- Start Single Product -->
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <!--- Start Container Fluid -->
            <div class="row">
                <!--- Start Row -->

                <!-- ===============================================
                                COLUMN 5
                =============================================== -->
                <div class="col-lg-5">
                    <!-- Start Column Large 5 -->

                    <!-- START DATA TABS CONTENT  -->
                    <!-- =================================== -->
                    <div class="tab-content">
                        <!-- Start Tab Content  -->

                        <div id="img1" class="tab-pane fade in active main_img">
                            <!-- Start Tab Pane(Tab Data) -->
                            <img src="<?php echo $imgUrl;  ?>" alt="">

                        </div><!-- End Tab Pane(Tab Data) -->


                        <div id="img2" class="tab-pane fade main_img">
                            <!-- Start Tab Pane(Tab Data) -->
                            <img src="<?php echo $imgUrl2;  ?>" alt="">

                        </div><!-- End Tab Pane(Tab Data) -->


                        <div id="img3" class="tab-pane fade main_img">
                            <!-- Start Tab Pane(Tab Data) -->
                            <img src="<?php echo $imgUrl3;  ?>" alt="">

                        </div><!-- End Tab Pane(Tab Data) -->
                    </div>
                    <!-- End Tab Content  -->


                    <!-- START DATA TABS  -->
                    <!-- =================================== -->
                    <div class="more-img">
                        <!-- Start More Img(div) -->
                        <ul class="image_list d-flex p-0">
                            <!-- Start More Img(ul) -->

                            <!-- -------------- -->

                            <li class="active">
                                <!-- Start data tabs(li) -->
                                <a data-toggle="tab" href="#img1">
                                    <!-- Start data tabs(a [TAG]) -->

                                    <img src="<?php echo $imgUrl;  ?>" alt="">

                                </a><!-- End data tabs(a [TAG]) -->
                            </li><!-- End data tabs(li) -->

                            <!-- -------------- -->

                            <li>
                                <!-- Start data tabs(li) -->
                                <a data-toggle="tab" href="#img2">
                                    <!-- Start data tabs(a [TAG]) -->

                                    <img src="<?php echo $imgUrl2;  ?>" alt="">

                                </a><!-- End data tabs(a [TAG]) -->
                            </li><!-- End data tabs(li) -->

                            <!-- -------------- -->
                            <li>
                                <!-- Start data tabs(li) -->
                                <a data-toggle="tab" href="#img3">
                                    <!-- Start data tabs(a [TAG]) -->

                                    <img src="<?php echo $imgUrl3;  ?>" alt="">

                                </a><!-- End data tabs(a [TAG]) -->
                            </li><!-- End data tabs(li) -->

                            <!-- -------------- -->

                        </ul><!-- End More Img(ul) -->
                    </div><!-- End More Img(div)  -->
                </div><!-- End Column Large 5 -->



                <!-- ===============================================
                            COLUMN 7
                =============================================== -->
                <div class="col-lg-7 order-3 product-deatil">
                    <!-- Start Column large 7 && Product Detail -->
                    <div class="product_description">
                        <!-- Start Product Description -->

                        <!-- -------------- -->
                        <!-- Product Name -->
                        <h3 class="product_name">
                            <?php echo $_SESSION['pname']  ?>
                        </h3>

                        <!-- -------------- -->
                        <!-- Product Rating -->
                        <div class="product-rating">
                            <span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span>
                            <span class="rating-review">45 Reviews</span>
                        </div>

                        <!-- -------------- -->
                        <!-- Product Price -->
                        <div>
                            <span class="product_price">
                                <?php
                                if ($_SESSION['padprice'] > 1) {
                                    echo "Rs" . $_SESSION['padprice'];
                                } else {
                                    echo "Rs" . $_SESSION['psprice'];
                                }
                                ?>
                            </span>

                            <span class="product_discount">
                                <?php
                                if ($_SESSION['padprice'] < 1) {
                                    echo ' ';
                                } else {
                                    echo "Rs" . $_SESSION['psprice'];
                                }
                                ?>
                            </span>
                        </div>

                        <!-- -------------- -->
                        <!-- Product Saved Price -->
                        <div>
                            <?php
                            if ($_SESSION['padprice'] > 1) {
                            ?>
                                <span class="product_saved">You Saved:</span>
                                <span style='color:black'>Rs.
                                    <?php echo $_SESSION['psprice'] - $_SESSION['padprice']   ?><span>
                                    <?php
                                } else {
                                    echo '';
                                }
                                    ?>
                        </div>

                        <!-- -------------- -->
                        <!-- Hr -->
                        <hr class="singleline">

                        <!-- -------------- -->
                        <!-- Product Selection -->
                        <div class="row">

                            <div class="col-xs-6 product-select">
                                <label for="color">Select a Color</label>
                                <select name="color">
                                    <option value="white">White</option>
                                    <option value="red">Red</option>
                                    <option value="gray">Gray</option>
                                </select>
                            </div>

                            <div class="col-xs-6 product-select">
                                <label for="size">Select a Size</label>
                                <select name="size">
                                    <option value=""><?php echo $_SESSION['pcolor'] ?></option>
                                </select>
                            </div>
                   

                            <?php
                            if ($_SESSION['pquantity'] < 6 && $_SESSION['pquantity'] > 0) {
                            ?>
                                <div class="col-xs-8 product-select">
                                    <!-- <label for="quantity">Select Quantity</label> -->
                                    <input type="number" name="quantity" min="1" max="5" placeholder="Please Enter a Quantity">
                                </div>
                                <div class="col-xs-4 p-0">
                                    <span class="item_quan">
                                        <?php
                                        echo '<p class="m-0"> Only ' . $_SESSION['pquantity'] . ' items left</p>';
                                        ?>
                                    </span>
                                </div>

                            <?php
                            } else {
                            ?>

                                <div class="col-xs-12 product-select">
                                    <input type="number" class="product_quan" name="quantity" maxlength="5" minlength="1" placeholder="Please Enter a Quantity">
                                </div>
                            <?php
                                // echo '<p class="m-0">More Than 5 Are Available</p>';
                            }
                            ?>
                            </span>
                        </div>
                    </div>

                    <!-- -------------- -->
                    <!-- Hr -->
                    <hr class="singleline">

                    <!-- -------------- -->
                    <!-- Product Bttons -->
                    <div class="col-xs-12 product-btn">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary shop-button">Add to Cart</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success shop-button">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- End Column large 7 && Product Detail -->
        </div><!-- End Row -->



        <!-- ===============================================
                            MORE INFORMATION OF PRODUCT
                =============================================== -->

        <div class="container-fluid mt-5">

            <!-- -------------- -->
            <!-- Data Tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
                <li><a data-toggle="tab" href="#information">Information</a></li>
                <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
            </ul>

            <!-- -------------- -->
            <!-- Data Tabs Content -->
            <div class="tab-content">

                <!-- -------------- -->
                <!-- Product Description -->
                <div id="description" class="tab-pane fade in active">
                    <h3>Product Description</h3>
                    <h5>Product Type</h5>
                    <h4><?php echo "Rs." . $_SESSION['psprice']  ?></h4>
                    <p class="text-muted">
                        <?php
                        $limit = substr($_SESSION['pdesc'], 0, 100000); // Setting text Length / Limit
                        $_SESSION['pdesc'] = substr($limit, 0, strrpos($limit, ' ') . "");
                        echo $_SESSION['pdesc'];
                        ?>
                    </p>
                </div>

                <!-- -------------- -->
                <!-- Product Information -->
                <div id="information" class="tab-pane fade">
                    <h3>Additional Information</h3>
                    <table class="table table-striped container">
                        <tbody>
                            <tr class="row">
                                <td class="col-xs-2">John</td>
                                <td class="col-xs-10">John</td>
                            </tr>
                            <tr class="row">
                                <td class="col-xs-2">John</td>
                                <td class="col-xs-10">John</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

                <!-- -------------- -->
                <!-- Product Reviews -->
                <div id="reviews" class="tab-pane fade">
                    <h3>Reviews</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>

            </div>
        </div>

        <!-- ===============================================
                =============================================== -->
    </div>
    <!--- Start Container Fluid -->
</div>
<!--- Start Single Product -->
</div>
<!--- Start Super Container -->

<!-- ===============================================
    =============================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





<script>
// $('.product_quan').on('input', function () {
    
//     var value = $(this).val();
    
//     if ((value !== '') && (value.indexOf('.') === -1)) {
        
//         $(this).val(Math.max(Math.min(value, 90), -90));
//     }
// });


// $(".product_quan" ).keyup(function() {
//   if($('.product_quan').val()<-10 || $('.product_quan').val()>10 ){
//       $('#errorMsg').show();
//   }
//   else{
//     $('#errorMsg').hide();
//   }
// });

    // $(document).ready(function() {
    //     var x = 1;
    //     var max_fields = 10;
    //     var wrapper = $(".input_fields_wrap");
    //     var add_button = $(".add_field_button");

    //     $(add_button).click(function(e) {
    //         e.preventDefault();

    //         if (x < max_fields) {
    //             // x++;
    //             $(wrapper).append('<div><input type="text" name="mytext[]"><a href="#" class="remove_field">Remove</a></div>');
    //             x++;
    //         }
    //     });

    //     $(wrapper).on("click", ".remove_field", function(e) {

    //         e.preventDefault();
    //         $(this).parent('div').remove();
    //         x--;

    //     })
    // });
</script>