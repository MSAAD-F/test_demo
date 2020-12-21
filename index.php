<?php
define('PAGE', 'Home');
define('TITLE', 'Home');

include('includes/header.php');
include('connection.php');
?>
<link rel="stylesheet" href="assets/css/index.css">
<!-- =========================================================
          START SLIDER
 ========================================================= -->

<div class="container-fluid p-0 ">
  <!-- Start Container Fluid -->


  <div class="one-time row d-flex">

    <?php
    $sql_banner = "SELECT * FROM banner";
    $query_banner = mysqli_query($con, $sql_banner);
    while ($row_banner = mysqli_fetch_assoc($query_banner)) {
      $bannerimgUrl = "assets/images/banner/" . $row_banner['banner_img'];
    ?>
      <div class="slider-container p-0 d-flex">
        <!-- Start Carousel-Item -->

        <style>
          .one-time .slider-container .slider-content button:hover {
            background: transparent;
            transition: all 0.5s ease-in-out;
          }
        </style>

        <!-- ===================================
              TEXT OF SLIDER 
          =================================== -->
        <!-- Start Slider Content -->
        <!-- <div class="prev">Prev</div> -->



        <div class="col-md-4 col-12 slider-content" style="background-color: <?php echo $row_banner['banner_bg_clr']; ?>; color: <?php echo $row_banner['banner_text_clr'];  ?>;">

          <h1><?php echo $row_banner['banner_heading'];  ?></h1>
          <p><?php echo $row_banner['banner_heading_text'];  ?></p>

          <a href="#" style="color: <?php echo $row_banner['banner_text_clr']; ?> ;">
            <button style="border: 1px solid <?php echo $row_banner['banner_text_clr']; ?> ;" onMouseOut="this.style.color='<?php echo $row_banner['banner_text_clr']; ?>';this.style.background='<?php echo $row_banner['banner_bg_clr']; ?>'" onMouseOver="this.style.color='<?php echo $row_banner['banner_bg_clr']; ?>';this.style.background='<?php echo $row_banner['banner_text_clr']; ?> ';">
              <?php echo $row_banner['banner_btn_title']; ?>
              <i class="fas fa-arrow-right"></i>
            </button>
          </a>

        </div>
        <!-- End Slider Content -->

        <!-- ===================================
              IMAGES OF SLIDER 
          =================================== -->
        <div class=" col-md-8 col-12 p-0 carousel-img">
          <img src="<?php echo $bannerimgUrl  ?>" alt="<?php echo $row_banner['banner_img_alt']  ?>">
        </div>
        <!-- <div class="next">Next</div> -->
      </div><!-- End Carousel-Item -->

    <?php  } ?>
  </div>
</div><!-- End Contianer Fluid -->



<!-- =========================================================
          SALE PRODUCT
 ========================================================= -->
<div class="container">
  <div class="row product">

    <h2>Sale Products</h2>

    <div class="col-lg-12">
      <?php
      $sql = "SELECT * FROM product WHERE padprice > 1 LIMIT 8";
      $result = mysqli_query($con, $sql);
      while (($row = mysqli_fetch_assoc($result))) {
        $imgUrl = "assets/images/products/" . $row['pimg'];
      ?>
        <!-- ========== First(Card) ========== -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">

            <div class="product-img">
              <img class="card-img-top" src="<?php echo $imgUrl  ?>">
            </div>

            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $row['pname']  ?></a>
              </h4>

              <h5>Rs.<?php echo $row['padprice']  ?> <span>Rs.<?php echo $row['psprice']  ?> </span></h5>
              <p class="card-text">
                <?php
                $limit = substr($row['pdesc'], 0, 80); // Setting text Length / Limit
                $row['pdesc'] = substr($limit, 0, strrpos($limit, ' ')) . '...';
                echo $row['pdesc']; ?>
              </p>
            </div>

            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>

          </div>
        </div>
      <?php } ?>

    </div>
  </div>
  <div class="showall-btn">
    <a href="product" class="showall"><button>Show All Products <i class="fas fa-arrow-right"></i></button></a>
  </div>
</div>



<!-- =========================================================
        TOP TREND
 ========================================================= -->

<div class="container-fluid ">
  <!-- Start Container Fluid -->

  <div class="row mid-img">
    <!-- Start Row && Mid Image -->

    <div class="col-md-4">
      <!-- Start Col md 4 -->
      <p>Just Hot Picks</p>
      <h2><a href="#">Browse Today’s Top Trending Inventory Now</a></h2>
      <a href="#"><button> Click and Browse <i class="fas fa-arrow-right"></i></button></a>
    </div><!-- End Col md 4 -->

    <div class="col-md-8">
      <!-- Start Col md 8 -->
      <img src="assets/images/s-l960 (1).webp" alt="">
    </div><!-- End Col md 8 -->

  </div><!-- Start Row && Mid Image -->

</div><!-- End Container Fluid -->


<!-- =========================================================
      START CATEGORIES
 ========================================================= -->

<div class="container">
  <!-- Start Container -->
  <h2>Explore Popular Categories</h2>

  <div class="exp-category row mt-3">
    <!-- Start Explore Category -->

    <?php
    $sql = "SELECT * FROM category";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

      $imgUrl = "assets/images/Category/" . $row['cate_img'];
    ?>

      <!-- <a href=""> -->
      <div class="category-container col-md-2 p-0 m-4">
        <!-- Start Category Container -->

        <div class="cate-img">
          <!-- Start Category Image -->
          <img src="<?php echo $imgUrl ?>" alt="<?php echo $row['cate_img_alt'] ?>" class="img-fluid">
        </div><!-- End Category Image -->

        <div class="cate-name">
          <!-- Start Category Name -->
          <span><?php echo $row['cate_name']  ?></span>
        </div><!-- End Category Name -->
        <!-- </a> -->
      </div><!-- End Category Container -->

    <?php } ?>
  </div><!-- End Explore Category -->
</div><!-- End Container -->







<?php include('includes/footer.php') ?>